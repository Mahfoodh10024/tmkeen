<?php

use App\Http\Controllers\home;
use App\Http\Controllers\Showproject;
use App\Http\Controllers\UploadStandardsController;
use App\Http\Controllers\UserProjectsController;
use App\Http\Controllers\UsersAccountsController;
use App\Http\Controllers\UsersProjectsController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Checkuserlogin;

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

// Route::get('/', function () {
//     return view('Home');
// })->name(name: 'main');

route::resource('/' , home::class);


Route::get('/singup' , function(){
    return view('create');
})->name('create');


Route::get('/signin', function () {
    return view(view: 'Login');
})->name('login');



Route::get('/newproject', function () {
    return view(view: 'add_project');
})->name('project')->middleware(Checkuserlogin::class);





Route::get('/home', function(){
    return view('Home');
})->name('home');


Route::get('/projects', function(){
    return view('Projects');
})->name('projects');


Route::get('/info', function(){
    return view('project_info');
})->name('info');

Route::get('/info1', function(){
    return view('project_info1');
})->name('info1');



Route::get('showproject/{name}' , Showproject::class)->name('show');



Route::resource('questions', UploadStandardsController::class);

Route::resource('account', controller: UsersAccountsController::class);

Route::resource('addproject', controller: UsersProjectsController::class);



Route::get('/load', function () {

    Storage::disk('Files')->put('example.txt', 'Contents');

    return 'Done';
})->name(name: 'files');



// Route::get('/questions',function(){
//         return view('questions');
// })->name('questions')->middleware(Checkuserlogin::class);
