<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;

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
/*
Route::get('/home', function () {
    return view('home');
});

Route::get('/list', function () {
    return view('list');
});
*/

Route::get('/home', [NavController::class, 'showHome']);

Route::get('/tag/{id}', [NavController::class, 'showTag']);

Route::get('/project/{id}', [NavController::class, 'showProject']);

Route::get('/add_project', [NavController::class, 'showAddProject']);

Route::post('/addProject', [ActionController::class, 'addProject']);

Route::post('/deleteProject', [ActionController::class, 'deleteProject']);

Route::get('/updateProject/{id}', [NavController::class, 'showUpdateProject']);

Route::post('/updateProject', [ActionController::class, 'updateProject']);

Route::get('/listProjects', [NavController::class, 'showList']);

Route::post('/deleteTag', [ActionController::class, 'deleteTag']);

Route::get('/add_tag', [NavController::class, 'showAddTag']);

Route::post('/addTag', [ActionController::class, 'addTag']);

Route::get('/updateTag/{id}', [NavController::class, 'showUpdateTag']);

Route::post('/updateTag', [ActionController::class, 'updateTag']);

