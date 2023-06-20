<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;

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
//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');
Route::post('admin/action', [RegisterController::class, 'actionadmin'])->name('actionadmin');
//LOGIN
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginPost', [LoginController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//HOME
Route::get('/home', [LoginController::class, 'index'])->name('index');
//CONTACT
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact/action', [HomeController::class, 'actioncontact'])->name('actioncontact');
//ABOUT
Route::get('/about', [HomeController::class, 'about'])->name('about');
//DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/form', [DashboardController::class, 'form'])->name('form');
Route::post('form/update/{id_mahasiswa}', [DashboardController::class, 'form_u'])->name('form_u');
Route::get('/profil', [DashboardController::class, 'profil'])->name('profil');
//ADMIN
Route::get('campusai_admin_dashboard', [AdminController::class, 'index'])->name('index');
Route::get('/404', [AdminController::class, 'no'])->name('no');
//
Route::get('list_user', [AdminController::class, 'user'])->name('user');
Route::post('user/update/{id_mahasiswa}', [AdminController::class, 'usr_u'])->name('usr_u');
Route::get('admin/delete/{id_mahasiswa}', [AdminController::class, 'usr_d'])->name('usr_d');
//
Route::get('list_lokasi', [AdminController::class, 'lokasi_k'])->name('lokasi_k');
Route::post('lokasi/update/{id_lokasi}', [AdminController::class, 'lks_u'])->name('lks_u');
Route::get('lokasi/delete/{id_lokasi}', [AdminController::class, 'lks_d'])->name('lks_d');
Route::post('lokasi/action', [AdminController::class, 'actionlokasi'])->name('actionlokasi');
//
Route::get('list_studi', [AdminController::class, 'studi_p'])->name('studi_p');
Route::post('studi/update/{id_studi}', [AdminController::class, 'std_u'])->name('std_u');
Route::post('studi/action', [AdminController::class, 'actionstudi'])->name('actionstudi');
Route::get('studi/delete/{id_studi}', [AdminController::class, 'std_d'])->name('std_d');
//
Route::get('list_calon', [AdminController::class, 'calon_m'])->name('calon_m');
Route::get('calon/delete/{id_mahasiswa}', [AdminController::class, 'calon_d'])->name('calon_d');
