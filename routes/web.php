<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Doctor\DoctorController;
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
    return view('dashboard.user.index');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.index')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

// delete/appoinment/user/
Route::get('delete/appoinment/user/{id}', [App\Http\Controllers\User\UserLogicController::class, 'DeleteUserCancelAppinment']);
//doctor/account/permition/
Route::get('doctor/account/permition/{id}', [App\Http\Controllers\HomeController::class, 'DoctorAccountPermition']);


Route::post('doctor/search', [App\Http\Controllers\User\UserLogicController::class, 'SearchDoctor'])->name('doctor.search');
Route::get('view/profile/{id}', [App\Http\Controllers\User\UserLogicController::class, 'viewProfile']);
Route::get('appoinment/{id}', [App\Http\Controllers\User\UserLogicController::class, 'appoinmentDoctor']);
Route::post('doctor/appoinment/', [App\Http\Controllers\User\UserLogicController::class, 'appoinment'])->name('doctor.appoinment');

Route::get('user/profile/show', [App\Http\Controllers\User\UserLogicController::class, 'UserProfileShow'])->name('user.profile.show');


Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.deshbord')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});


// sliddder route here 
Route::get('/slider', [App\Http\Controllers\Admin\slidderController::class, 'index'])->name('slidder');
Route::post('store/slidder', [App\Http\Controllers\Admin\slidderController::class, 'storeslidder'])->name('store.slidder');
Route::get('all/slidder/', [App\Http\Controllers\Admin\slidderController::class, 'allslidder'])->name('all.slidder');
Route::get('edit/slidder/{id}', [App\Http\Controllers\Admin\slidderController::class, 'editslidder']);
Route::post('update/slidder/{id}', [App\Http\Controllers\Admin\slidderController::class, 'updateslidder']);
Route::get('delete/slidder/{id}', [App\Http\Controllers\Admin\slidderController::class, 'deleteslidder']); 

// category route here 
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category');
Route::post('store/category', [App\Http\Controllers\Admin\CategoryController::class, 'storecategory'])->name('store.category');
Route::get('all/category/', [App\Http\Controllers\Admin\CategoryController::class, 'allcategory'])->name('all.category');
Route::get('edit/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'editcategory']);
Route::post('update/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'updatecategory']);
Route::get('delete/category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'deletecategory']); 


// User Delete route here 
Route::get('/doctor/list', [App\Http\Controllers\Admin\PatentController::class, 'AllDoctor'])->name('all.doctor');
Route::get('delete/doctor/{id}', [App\Http\Controllers\Admin\PatentController::class, 'deletedoctor']);
// Doctor Delete route here 
Route::get('/patent', [App\Http\Controllers\Admin\PatentController::class, 'AllPatent'])->name('patent');
Route::get('delete/patent/{id}', [App\Http\Controllers\Admin\PatentController::class, 'deletepatent']);



//settings route here
Route::get('settings/', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::get('all/settings/', [App\Http\Controllers\SettingsController::class, 'allsettings'])->name('all.settings');
Route::post('store/settings', [App\Http\Controllers\SettingsController::class, 'storesettings'])->name('store.settings');
Route::get('edit/settings/{id}', [App\Http\Controllers\SettingsController::class, 'editsettings']);
Route::post('update/settings/{id}', [App\Http\Controllers\SettingsController::class, 'updatesettings']);
Route::get('delete/settings/{id}', [App\Http\Controllers\SettingsController::class, 'deletesettings']);



// team route here
Route::get('team/', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('all/team/', [App\Http\Controllers\TeamController::class, 'allteam'])->name('all.team');
Route::post('store/team', [App\Http\Controllers\TeamController::class, 'storeteam'])->name('store.team');
Route::get('edit/team/{id}', [App\Http\Controllers\TeamController::class, 'editteam']);
Route::post('update/team/{id}', [App\Http\Controllers\TeamController::class, 'updateteam']);
Route::get('delete/team/{id}', [App\Http\Controllers\TeamController::class, 'deleteteam']);

Route::prefix('doctor')->name('doctor.')->group(function(){

       Route::middleware(['guest:doctor','PreventBackHistory'])->group(function(){
            Route::view('/login','dashboard.doctor.login')->name('login');
            Route::view('/register','dashboard.doctor.register')->name('register');
            Route::post('/create',[DoctorController::class,'create'])->name('create');
            Route::post('/check',[DoctorController::class,'check'])->name('check');
       });

       Route::middleware(['auth:doctor','PreventBackHistory'])->group(function(){
            //Route::view('/home','dashboard.doctor.deshbord')->name('home');
            Route::post('logout',[DoctorController::class,'logout'])->name('logout');
            Route::get('/home',[DoctorController::class,'home'])->name('home');
       });

});


Route::get('doctor-profile/', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'doctorprofile'])->name('doctor.profile');
Route::post('doctor-profile-update/', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'updatedoctor'])->name('doctor-profile-update');
Route::get('all-doctor.appoinmemt/', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'allDoctorAppoinment'])->name('all.doctor.appoinmemt');
Route::get('confirm/appoinment/{id}', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'ConfirmAppoinment']);
Route::get('cencel/appoinment/{id}', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'CancelAppoinment']);
Route::get('delete/appoinment/{id}', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'DeleteAppoinment']);

//done/appoinment/
Route::get('done/appoinment/{id}', [App\Http\Controllers\Doctor\UpdateDoctorController::class, 'DoneAppoinment']);

