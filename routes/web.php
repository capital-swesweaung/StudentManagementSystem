<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Exports\UsersExport;
use App\Imports\StudentsImport;
use  App\Exports\StudentsExport;

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
    //return view('welcome');
    return view('welcome',[
        'users' => App\Models\User::all()
    ]);
});

//localhost welcome page 
Route::post('import', function () {
    Excel::import(new UsersImport, request()->file('file'));
    return redirect()->back()->with('success','Data Imported Successfully');
});

Route::get('export-csv', function () {
    return Excel::download(new UsersExport, 'users.csv');
});
//
//data import and extport for student
Route::post('student-import', function () {
    Excel::import(new StudentsImport, request()->file('file'));
    return redirect()->back()->with('success','Data Imported Successfully');
});

Route::get('student-csv', function () {
    return Excel::download(new StudentsExport, 'student.csv');
});
//

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Auth case
Route::group(['middleware' => ['auth']], function () {
    Route::get('/studentlist',[StudentController::class,'index'])->name('student.list');
});
//
//logout case testing
Route::post('student-logout', function () {
    Auth::logout();
    return redirect()->route('student.list')->with('success','Logout Successfully');
});
//Route::resource('student',[App\Http\Controllers\StudentController::class,'index'])->naeme('student.list');


//insert case
Route::get('/create',[StudentController::class,'create'])->name('student.create');
Route::post('/store',[StudentController::class,'store'])->name('student.store');
//
//show case
Route::get('student/show/{student}',[StudentController::class,'show'])->name('student.show');
//
//update case
Route::get('student/edit/{student}',[StudentController::class,'edit'])->name('student.edit');
Route::patch('student/update/{student}',[StudentController::class,'update'])->name('student.update');
//
//delet case
Route::delete('/student/{student}',[StudentController::class,'destroy'])->name('student.destroy');
//
//login Register
//resgister form view
Route::get('/student/register',[RegisterController::class,'Register']);
Route::post('register/admin', [RegisterController::class, 'CreateAdmin'])->name('register.admin');

// Route::get('/login',[LoginController::class,'show_Login']);
// Route::post('/login/submit',[LoginController::class,'submitLogin'])->name('login.submit');
