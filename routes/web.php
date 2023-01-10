<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WellcomeController;

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

Route::get('/', [WellcomeController::class, 'index'])->name('home');
Route::post('/pagamento', [WellcomeController::class, 'makePayment'])->name('makepayment');
