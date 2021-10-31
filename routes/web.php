<?php

use App\Http\Livewire\AddXodim;
use App\Http\Livewire\BolimComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\IndexComponent;
use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\XodimDetailComponent;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/',HomeComponent::class)->name('home');
Route::get('bolim/',BolimComponent::class)->name('bolim');
Route::get('index/',IndexComponent::class)->name('index');
Route::get('login/',LoginComponent::class)->name('login');
Route::get('addxodim/',AddXodim::class)->name('addxodim');
Route::get('xodimdetail/',XodimDetailComponent::class)->name('xodimdetail');
