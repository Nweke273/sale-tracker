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
        return response()->json("Opportunity Created", Response::HTTP_CREATED);
    }

    public function leads()
    {

        return LeadResource::collection(Lead::all());
    }
}