<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\EventParticipantController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//use App\Http\Controllers\Api\EventController;
/**/Route::apiResources([
    'events' => EventController::class, 
    'event_participant' => EventParticipantController::class
]);
//Route::resource('events', EventController::class);

//use App\Http\Controllers\Api\EventParticipantController;
/*Route::apiResources([
    'event_participants' => EventParticipantController::class, 
]);*/
//Route::resource('events', EventParticipantController::class);
