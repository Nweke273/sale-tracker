<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Stage;
use App\Models\Profile;
use App\Models\Pipeline;
use App\Http\Requests\StageRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Http\Resources\StageResource;
use App\Http\Requests\PipelineRequest;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\PipelineResource;

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
}
