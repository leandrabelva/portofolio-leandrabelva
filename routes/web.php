<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCertificationController;
use App\Http\Controllers\AdminOrganizationController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\ContactController;

//Public Portfolio
Route::get('/', [PortfolioController::class, 'index'])->name('home');

//Admin Auth
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

//Protected Admin Dashboard Group
Route::middleware([AdminMiddleware::class])->prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/dashboard', [ContactController::class, 'index'])->name('dashboard');

    //CRUD Projects
    Route::resource('projects', AdminProjectController::class);

    //CRUD Certifications
    Route::resource('certifications', AdminCertificationController::class);

    //CRUD Organizations
    Route::resource('organizations', AdminOrganizationController::class);

    //CRUD Skills
    Route::resource('skills', AdminSkillController::class);

    //Dashboard & Pesan Masuk
    
    Route::delete('/messages/{id}', [ContactController::class, 'destroy'])->name('messages.destroy');


});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


