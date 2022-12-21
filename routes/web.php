<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\InvoicepoController;
use App\Http\Controllers\InvoiceprController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InvoicerawController;
use App\Http\Controllers\MastercardController;
use App\Http\Controllers\RekaporderController;
use App\Http\Controllers\SalesorderController;
use App\Http\Controllers\InvoiceSlipController;
use App\Http\Controllers\RawmaterialController;
use App\Http\Controllers\PurchaseorderController;
use App\Http\Controllers\RekapsupplierController;
use App\Http\Controllers\ShiptoaddressController;
use App\Http\Controllers\InquiryproductController;
use App\Http\Controllers\SlipfinishgoodController;
use App\Http\Controllers\GroupmastercardController;
use App\Http\Controllers\InvoiceDeliveryController;
use App\Http\Controllers\ManufacturingorderController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/register', [RegisterController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::resource('/users', UserController::class)->middleware('owner');
Route::resource('/customers', CustomerController::class)->middleware('auth');
Route::resource('/mastercards', MastercardController::class)->middleware('auth');
Route::resource('/shiptoaddresses', ShiptoaddressController::class)->middleware('auth');
Route::resource('/groupmastercards', GroupmastercardController::class)->middleware('auth');
Route::resource('/salesorders', SalesorderController::class)->middleware('auth');
Route::resource('/deliveries', DeliveryController::class)->middleware('auth');
Route::resource('/invoicedeliveries', InvoiceDeliveryController::class)->middleware('auth');
Route::resource('/manufacturingorders', ManufacturingorderController::class)->middleware('auth');
Route::resource('/slipfinishgoods', SlipfinishgoodController::class)->middleware('auth');
Route::resource('/invoiceslips', InvoiceSlipController::class)->middleware('auth');
Route::resource('/drivers', DriverController::class)->middleware('auth');
Route::resource('/suppliers', SupplierController::class)->middleware('auth');
Route::resource('/purchaseorders', PurchaseorderController::class)->middleware('auth');
Route::resource('/invoicepos', InvoicepoController::class)->middleware('auth');
Route::resource('/invoiceprs', InvoiceprController::class)->middleware('auth');
Route::resource('/rekaporders', RekaporderController::class)->middleware('auth');
Route::resource('/rekapsuppliers', RekapsupplierController::class)->middleware('auth');
Route::resource('/inquiryproducts', InquiryproductController::class)->middleware('auth');
Route::resource('/rawmaterials', RawmaterialController::class)->middleware('auth');
Route::resource('/invoiceraws', InvoicerawController::class)->middleware('auth');
Route::get('/reportpos', [ReportController::class, 'indexpos'])->middleware('auth');
Route::get('/reportpos/{tglawal}/{tglakhir}', [ReportController::class, 'showpos'])->middleware('auth');
Route::get('/reportsos', [ReportController::class, 'indexsos'])->middleware('auth');
Route::get('/reportsos/{tglawal}/{tglakhir}', [ReportController::class, 'showsos'])->middleware('auth');
Route::get('/reportdeliveries', [ReportController::class, 'indexdeliveries'])->middleware('auth');
Route::get('/reportdeliveries/{tglawal}/{tglakhir}', [ReportController::class, 'showdeliveries'])->middleware('auth');
