<?php

use App\Http\Controllers\SendMailController;
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

Route::get('/', function () {
    return view('welcome');
});

# rota para verificar template do email
Route::resource('send-mail', SendMailController::class)
    ->except(
        ['edit', 'update', 'delete', 'index', 'store', 'create', 'destroy']
    );

Route::get('test-custom-job', [SendMailController::class, 'testCustomJob']);
