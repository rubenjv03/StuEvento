<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create']);
Route::get('/events/{id}',[EventController::class, 'show($id)']);
Route::post('/events',[EventController::class, 'store']);
Route::get('/events/{id}/register',[EventController::class, 'register($id)']);
Route::post('/events/{id}/attendees',[EventController::class, 'storeAttendee($idEvent)']);
Route::get('/events/{id}/edit',[EventController::class, 'edit($id)']);
Route::put('/events/{id}',[EventController::class, 'update($id)']);
