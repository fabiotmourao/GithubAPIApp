<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GithubUserController;

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

Route::get('/', [GithubUserController::class, 'index']);
Route::post('/search', [GithubUserController::class, 'search']);
