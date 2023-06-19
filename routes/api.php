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

    Route::get('/industries', [BaseController::class, 'industries']);
    Route::get('/departments', [BaseController::class, 'departments']);
    Route::get('/pipelines', [BaseController::class, 'pipelines']);
    Route::get('/account-types', [BaseController::class, 'accountTypes']);
    Route::get('/case-origins', [BaseController::class, 'caseOrigins']);
    Route::get('/case-types', [BaseController::class, 'caseTypes']);
    Route::get('/case-reasons', [BaseController::class, 'caseReasons']);
    Route::get('/lead-sources', [BaseController::class, 'leadSources']);
    Route::get('/loss-reasons', [BaseController::class, 'lossReasons']);
    Route::get('/opportunity-types', [BaseController::class, 'opportunityTypes']);
    Route::get('/profiles', [BaseController::class, 'profiles']);
    Route::get('/ratings', [BaseController::class, 'ratings']);
    Route::get('/stages', [BaseController::class, 'stages']);
    Route::get('/job-titles', [BaseController::class, 'jobTitles']);
});

Route::post('auth/register', Auth\RegisterController::class);
Route::post('auth/login', Auth\LoginController::class);
