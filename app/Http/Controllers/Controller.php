<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Cases;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Opportunity;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function convertLead($request, $id)
    {
        $lead = Lead::find($id);
        $account = Account::create([
            'lead_id' => $id,
            'industry_id' => $lead->industry_id,
            'lead_source_id' => $lead->lead_source_id,
            'parent_account_id' => $request->parent_id,
            'phone' => $lead->phone,
            'alt_phone' => $lead->alt_phone,
            'email' => $lead->email,
            'street' => $lead->street,
            'city' => $lead->city,
            'state' => $lead->state,
            'zip_code' => $lead->zip_code,
            'country' => $lead->country,
            'website' => $lead->website,
            'fax' => $request->fax,
            'user_id' => $request->user_id,
            'no_of_employees' => $request->no_of_empoloyees,
            'account_type_id' => $request->account_type_id,
            'annual_revenue' => $request->annual_revenue,
            'billing_street' => $request->billing_address,
            'billing_city' => $request->billing_city,
            'billing_state' => $request->billing_State,
            'billing_zip_code' => $request->billing_zip_code,
            'billing_country' => $request->billing_country,
            'shipping_street' => $request->shipping_street,
            'shipping_city' => $request->shipping_city,
            'shipping_state' => $request->shipping_state,
            'shipping_zip_code' => $request->shipping_code,
            'shipping_country' => $request->shipping_country,
            'description' => $request->description,
        ]);

        $contact = Contact::create([
            'lead_id' => $id,
            'account_id' => $account->id ?? 4,
            'salutation' => $lead->salutation,
            'first_name' => $lead->first_name,
            'last_name' => $lead->last_name,
            'date_of_birth' => $request->date_of_birth,
            'department_id' => $request->department_id,
            'reporting_to_id' => $request->reporting_to_id,
            'job_title_id' => $lead->job_title_id,
            'lead_source_id' => $lead->lead_source_id,
            'user_id' => $request->user_id,
            'phone' => $lead->phone,
            'alt_phone' => $lead->alt_phone,
            'email' => $lead->email,
            'alt_email' => $lead->alt_email,
            'street' => $lead->street,
            'zip_code' => $lead->zip_code,
            'country' => $lead->country,
            'description' => $lead->description,
            'website' => $lead->website,
        ]);

        $opportunity = Opportunity::create([
            'name' => $request->name,
            'lead_id' => $lead->id,
            'expected_amount' => $request->expected_amount,
            'contact_id' => $contact->id,
            'industry_id' => $lead->industry_id,
            'opportunity_type_id' => $lead->opportunity_type_id,
            'user_id' => $request->user_id,
            'lead_source_id' => $lead->lead_source_id,
            'rating_id' => $request->rating_id,
            'pipeline_id' => $request->pipeline,
            'loss_reason_id' => $request->loss_reason_id,
            'quote_id' => $request->quote_id,
            'description' => $request->description
        ]);

        Cases::create([
            'opportunity_id' => $opportunity->id,
            'name' => $request->name,
            'case_type_id' => $request->case_type_id,
            'case_origin_id' => $request->case_origin_id,
            'priority_id' => $request->priority_id,
            'pipeline_id' => $request->pipeline_id,
            'case_reason_id' => $request->case_reason_id,
            'description' => $request->description,
            'internal_comments' => $request->internal_comment,
            'lessons_learned' => $request->lessons_learned
        ]);
    }
}
