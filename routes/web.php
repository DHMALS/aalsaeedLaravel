<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LangConverter;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/{lang?}', [LangConverter::class,'langConverter'])->name('langConv');

// Route::middleware('langConv')->prefix('{locale}')->group(function(){
//         
// });

// Route::get('/langConv/{locale}', function($locale){
//     // dd(in_array($locale, ['ar','en']));
//     // dd($locale);
//     if(in_array($locale, ['ar','en'])){
//         Session::put('locale', $locale);
//     }
//     return redirect()->back();
// })->name('langConv');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
