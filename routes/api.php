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
    Route::post('/create-stage', [BaseController::class, 'createStage']);
    Route::post('/create-pipeline', [BaseController::class, 'createPipeline']);
    Route::post('/create-role', [BaseController::class, 'createRole']);
    Route::post('/create-profile', [BaseController::class, 'createProfile']);
    Route::post('/create-opportunity-type', [BaseController::class, 'createOpportunityType']);
    Route::post('/create-lead', [LeadController::class, 'createLead']);
    Route::get('/leads', [LeadController::class, 'leads']);
    Route::get('/leads/{id}', [LeadController::class, 'singleLead']);
    Route::put('/leads/{id}/update', [LeadController::class, 'updateLead']);
    Route::delete('/leads/{id}/delete', [LeadController::class, 'deleteLead']);

    Route::post('/convert-lead/{id}', [LeadController::class, 'convertLeadToOpportunity']);
    Route::get('/accounts/{id}', [LeadController::class, 'leadAccount']);
    Route::put('/accounts/{id}/update', [LeadController::class, 'updateAccount']);
    Route::delete('/accounts/{id}/delete', [LeadController::class, 'deleteAccount']);
    Route::get('/accounts', [LeadController::class, 'accounts']);

    Route::get('/contacts/{id}', [LeadController::class, 'leadContact']);
    Route::put('/contacts/{id}/update', [LeadController::class, 'updateContact']);
    Route::delete('/contacts/{id}/delete', [LeadController::class, 'deleteContact']);
    Route::get('/contacts', [LeadController::class, 'contacts']);


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
