<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Lead;
use App\Models\Stage;
use App\Models\Rating;
use App\Models\Profile;
use App\Models\CaseType;
use App\Models\Industry;
use App\Models\JobTitle;
use App\Models\Pipeline;
use App\Models\CaseOrigin;
use App\Models\CaseReason;
use App\Models\Department;
use App\Models\LeadSource;
use App\Models\LossReason;
use App\Models\Opportunity;
use App\Models\AccountTypes;
use App\Models\OpportunityType;
use App\Http\Requests\StageRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Resources\StageResource;
use App\Http\Requests\PipelineRequest;
use App\Http\Resources\RatingResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\CaseTypeResource;
use App\Http\Resources\IndustryResource;
use App\Http\Resources\JobTitleResource;
use App\Http\Resources\PipelineResource;
use App\Http\Requests\OpportunityRequest;
use App\Http\Resources\CaseOriginResource;
use App\Http\Resources\CaseReasonResource;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\LeadSourceResource;
use App\Http\Resources\LossReasonResource;
use App\Http\Resources\AccountTypeResource;
use App\Http\Resources\OpportunityResource;
use App\Http\Resources\OpportunityTypeResource;

class BaseController extends Controller
{
    public function createStage(stageRequest $request)
    {
        $stage = Stage::create($request->validated());
        return StageResource::make($stage);
    }

    public function createPipeline(PipelineRequest $request)
    {
        $pipeline = Pipeline::create($request->validated());
        return PipelineResource::make($pipeline);
    }

    public function createProfile(ProfileRequest $request)
    {
        $profile = Profile::create($request->validated());
        return ProfileResource::make($profile);
    }

    public function createOpportunityType(OpportunityRequest $request)
    {
        $opportunity = Opportunity::create($request->validated());
        return OpportunityResource::make($opportunity);
    }

    public function departments()
    {
        dd(Lead::find(1)->industry());
        return DepartmentResource::collection(Department::all());
    }

    public function accountTypes()
    {
        return AccountTypeResource::collection(AccountTypes::all());
    }

    public function caseOrigins()
    {
        return CaseOriginResource::collection(CaseOrigin::all());
    }

    public function caseReasons()
    {
        return CaseReasonResource::collection(CaseReason::all());
    }

    public function caseTypes()
    {
        return CaseTypeResource::collection(CaseType::all());
    }

    public function industries()
    {

        return IndustryResource::collection(Industry::all());
    }

    public function leadSources()
    {
        return LeadSourceResource::collection(LeadSource::all());
    }

    public function lossReasons()
    {
        return LossReasonResource::collection(LossReason::all());
    }

    public function OpportunityTypes()
    {
        return OpportunityTypeResource::collection(OpportunityType::all());
    }

    public function pipelines()
    {
        return PipelineResource::collection(Pipeline::all());
    }

    public function ratings()
    {
        return RatingResource::collection(Rating::all());
    }

    public function jobTitles()
    {
        return JobTitleResource::collection(JobTitle::all());
    }

    public function stages()
    {
        return StageResource::collection(Stage::all());
    }
}
