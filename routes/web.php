<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\JobController;
use App\Http\Controllers\Front\SubmitJobController;

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| PUBLIC FRONT ROUTES
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [HomeController::class,'index']);

// Job Listing
Route::get('/lowongan', [JobController::class,'index'])->name('jobs.index');
Route::get('/lowongan/{slug}', [JobController::class,'detail'])->name('jobs.detail');

// Public Pages
Route::view('/pelatihan','front.pages.pelatihan')->name('pelatihan');
Route::view('/tentang','front.pages.tentang')->name('tentang');

// Pages Bantuan
Route::view('/syarat-ketentuan','front.helps.syarat')->name('helps.syarat');
Route::view('/kebijakan-privasi','front.helps.privasi')->name('helps.privasi');
Route::view('/faq','front.helps.faq')->name('helps.faq');
Route::view('/hubungi-kami','front.helps.kontak')->name('helps.kontak');

// Submit Loker
Route::get('/company/submit', [SubmitJobController::class,'create'])->name('pasangloker.create');
Route::post('/company/submit', [SubmitJobController::class,'store'])->name('pasangloker.store');


/*
|--------------------------------------------------------------------------
| COMPANY PANEL (future)
|--------------------------------------------------------------------------
*/
Route::prefix('company')->group(function(){
    Route::get('/dashboard', fn()=>view('company.dashboard'));
});

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/dashboard', fn()=>view('admin.dashboard'));
});
