<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\LeadOpportunity;
use App\Http\Requests\LeadRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\LeadResource;
use App\Http\Requests\LeadOpportunityRequest;

class LeadController extends BaseController
{
    public function createLead(LeadRequest $request)
    {
        $lead = Lead::create($request->validated());
        return LeadResource::make($lead);
    }

    public function convertLeadToOpportunity(LeadOpportunityRequest $request)
    {
        LeadOpportunity::create($request->validated());
        return response()->json("Opportunity Created", Response::HTTP_CREATED);
    }
}
