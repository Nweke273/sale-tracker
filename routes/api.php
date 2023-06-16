<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\V1\Auth;
use \App\Http\Controllers\Api\V1\Admin\BaseController;
use \App\Http\Controllers\Api\V1\Admin\LeadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::post('admin/create-stage', [BaseController::class, 'createStage']);
    Route::post('admin/create-pipeline', [BaseController::class, 'createPipeline']);
    Route::post('admin/create-profile', [BaseController::class, 'createProfile']);
    Route::post('admin/create-opportunity-type', [BaseController::class, 'createOpportunityType']);
    Route::post('admin/create-lead', [LeadController::class, 'createLead']);
    Route::get('admin/leads', [LeadController::class, 'leads']);

    Route::post('admin/convert-lead', [LeadController::class, 'convertLeadToOpportunity']);

});

Route::post('auth/register', Auth\RegisterController::class);
Route::post('auth/login', Auth\LoginController::class);
