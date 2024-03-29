<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/{any}', function () {
//     return view('index');
// })->where('any', '.*');

// Route::get('/{pathMatch}', function (){
//     return view('welcome');
// })->where('pathMatch', ".*");


Route::get('/', function () {
    return view('web');
});

// Send mail with queues jobs 555+
Route::get('/send-mail', [MailController::class, 'index'])->name("send-mail");
Route::post('/send-mail', [MailController::class, 'sendMail']);

Route::get('/livewire', [LiveWireController::class, 'index']);

Route::get('/amazon-s3', [ImageController::class, 'amazonS3']);
Route::post('/amazon-s3', [ImageController::class, 'storeS3']);
Route::get('/amazon-s3/{image}', [ImageController::class, 'showImageS3']);
