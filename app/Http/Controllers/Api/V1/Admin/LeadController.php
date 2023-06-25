<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Lead;
use App\Models\Cases;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\LeadRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\CaseResource;
use App\Http\Resources\LeadResource;
use App\Http\Resources\AccountResource;
use App\Http\Resources\ContactResource;
use App\Http\Requests\OpportunityRequest;

/**
 * @group Lead
 */

class LeadController extends BaseController
{

    //Lead
    public function createLead(LeadRequest $request)
    {
        $lead = Lead::create($request->validated());
        return LeadResource::make($lead);
    }

    public function convertLeadToOpportunity(Request $request, $id)
    {
        try {
            $this->convertLead($request, $id);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }

        return response()->json("Opportunity Created",  Response::HTTP_ACCEPTED);
    }

    public function leads()
    {
        return LeadResource::collection(Lead::all());
    }

    public function singleLead($id)
    {
        return LeadResource::make(Lead::find($id));
    }

    public function updateLead(LeadRequest $request, $id)
    {
        $lead = Lead::find($id);
        $lead->update($request->validated());
        return response()->json(LeadResource::make($lead), Response::HTTP_ACCEPTED);
    }

    public function deleteLead($id)
    {
        Lead::find($id)->delete();
        return response()->noContent();
    }


    //Account

    public function accounts()
    {
        return AccountResource::collection(Account::all());
    }

    public function updateAccount(Request $request, $id)
    {
        $account = Account::find($id);
        $account->update($request->all());
        return response()->json(AccountResource::make($account), Response::HTTP_ACCEPTED);
    }

    public function leadAccount($id)
    {
        return AccountResource::make(Account::find($id));
    }

    public function deleteAccount($id)
    {
        Account::find($id)->delete();
        return response()->noContent();
    }


    //Contact
    public function contacts()
    {
        return ContactResource::collection(Contact::all());
    }

    public function updateContact(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->update($request->all());
        return response()->json(ContactResource::make($contact), Response::HTTP_ACCEPTED);
    }

    public function leadContact($id)
    {
        return ContactResource::make(Contact::find($id));
    }

    public function deleteContact($id)
    {
        Contact::find($id)->delete();
        return response()->noContent();
    }


    //Case
    public function cases()
    {
        return CaseResource::collection(Cases::all());
    }

    public function updateCase(Request $request, $id)
    {
        $case = Cases::find($id);
        $case->update($request->all());
        return response()->json(CaseResource::make($case), Response::HTTP_ACCEPTED);
    }

    public function leadCase($id)
    {
        return CaseResource::make(Cases::find($id));
    }

    public function deleteCase($id)
    {
        Cases::find($id)->delete();
        return response()->noContent();
    }
}
