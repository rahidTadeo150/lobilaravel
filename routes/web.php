<?php

use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\WebsitePanel;
use App\Http\Controllers\AuthorizationAdmin;
use App\Http\Controllers\Beasiswa;
use App\Http\Controllers\Lomba;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::redirect('/', '/landing-page');

Route::get('/login-admin', [AdminPanel::class, 'directToLogin'])->name('AdminLogin')->middleware('guest');
Route::post('/auth-admin', [AuthorizationAdmin::class, 'authentication'])->name('AdminLogin.Auth')->middleware('guest');

Route::get('/log-in', [AuthController::class, 'LoginMethod'])->name('Login.LoginMethod');
Route::get('/landing-page', [AuthController::class, 'ShowLandingPage'])->name('Website.LandingPage');
Route::get('/daftar-beasiswa', [WebsitePanel::class, 'ShowListBeasiswa'])->name('Website.Beasiswa.Index');
Route::get('/daftar-lomba', [WebsitePanel::class, 'ShowListLomba'])->name('Website.Lomba.Index');

Route::middleware('AdminLogedIn')->group(function () {
    Route::post('/logout-account', [AuthorizationAdmin::class, 'logout'])->name('AdminLogin.Logout');

    Route::get('/dashboard-admin', [AdminPanel::class, 'directToDashboard'])->name('Dashboard.Index');
    Route::get('/notification-request', [AdminPanel::class, 'directToIndexNotification'])->name('Dashboard.Notification');
    Route::get('/detail-notification', [AdminPanel::class, 'directToDetailNotification'])->name('Dashboard.Notification.Detail');

    Route::get('/index-beasiswa', [Beasiswa::class, 'directToIndexBeasiswa'])->name('Beasiswa.Index');
    Route::get('/detail-beasiswa', [Beasiswa::class, 'directToDetailBeasiswa'])->name('Beasiswa.Detail');
    Route::get('/index-history-beasiswa', [Beasiswa::class, 'directToIndexHistoryBeasiswa'])->name('Beasiswa.History.Index');
    Route::get('/form-tambah-beasiswa', [Beasiswa::class, 'directToCreateBeasiswa'])->name('Beasiswa.Create');
    Route::post('/store-data-beasiswa', [Beasiswa::class, 'StoreDataBeasiswa'])->name('Beasiswa.Store');
    Route::delete('/delete-data-beasiswa', [Beasiswa::class, 'DeleteBeasiswa'])->name('Beasiswa.Delete');
    Route::get('/edit-data-beasiswa', [Beasiswa::class, 'EditBeasiswa'])->name('Beasiswa.Edit');
    Route::put('/updating-data-beasiswa', [Beasiswa::class, 'UpdateBeasiswa'])->name('Beasiswa.Update');

    Route::get('/select-instansi-beasiswa', [Beasiswa::class, 'SelectionInstansiBeasiswa'])->name('Instansi.SelectInstansi');
    Route::get('/index-instansi-beasiswa', [ Beasiswa::class, 'directToIndexInstansiBeasiswa'])->name('Beasiswa.Instansi.Index');
    Route::get('/form-instansi-beasiswa', [ Beasiswa::class, 'directToCreateInstansiBeasiswa'])->name('Beasiswa.Instansi.Create');
    Route::post('/store-data-instansi-beasiswa', [ Beasiswa::class, 'StoreDataInstansi'])->name('Beasiswa.Instansi.Store');

    Route::get('/index-lomba', [Lomba::class, 'directToIndexLomba'])->name('Lomba.Index');
    Route::get('/index-history-lomba', [Lomba::class, 'directToIndexHistoryLomba'])->name('Lomba.HistoryData');
    Route::get('/form-tambah-lomba', [Lomba::class, 'directToCreateLomba'])->name('Lomba.Create');
    Route::post('/store-data-lomba', [Lomba::class, 'StoreDataLomba'])->name('Lomba.Store');
    Route::get('/detail-lomba', [Lomba::class, 'directToDetailLomba'])->name('Lomba.Detail');
    Route::get('/edit-data-lomba', [Lomba::class, 'EditLomba'])->name('Lomba.Edit');
    Route::put('/updating-data-lomba', [Lomba::class, 'UpdateLomba'])->name('Lomba.Update');
    Route::delete('/delete-data-lomba', [Lomba::class, 'DeleteLomba'])->name('Lomba.Delete');
    Route::get('/restoring-data-lomba', [Lomba::class, 'RestoreLomba'])->name('Lomba.Restore');

    Route::get('/detail-event', [AdminPanel::class, 'directToDetailEvent'])->name('DetailEvent');
});
