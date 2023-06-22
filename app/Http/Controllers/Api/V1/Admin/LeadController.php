<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Opportunity;
use App\Http\Requests\LeadRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\LeadResource;
use App\Http\Requests\OpportunityRequest;

/**
 * @group Lead
 */

class LeadController extends BaseController
{
    public function createLead(LeadRequest $request)
    {
        $lead = Lead::create($request->validated());
        return LeadResource::make($lead);
    }

    public function convertLeadToOpportunity(OpportunityRequest $request)
    {
        Opportunity::create($request->validated());
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
}
