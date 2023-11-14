<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Mails;
use App\Http\Controllers\universitie_PDF;
use App\Http\Controllers\MarksController;
use PhpParser\Builder\Function_;

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
    Route::resource('Mail',Mails::class);
    Route::resource('post',PostController::class);
    /*
    Route::get('PDF1',[universitie_PDF::class,'index']); */
    Route::get('PDF1/create',[universitie_PDF::class,'create']);
    Route::post('store',[universitie_PDF::class,'store']);
    Route::get('PD/{name}/{level}',[universitie_PDF::class,'hdd']);
    Route::get('L_PDF/{id}/{name}',[universitie_PDF::class,'show']);
    Route::get('laravl_m/{id}/{type}',[universitie_PDF::class,'show_m']);

            Route::get('/', function () {
                return view('welcome');
            });

        Route::get('universitie/{name}',Function($name)
        {
            $names=$name;
        return view('pdf/show',compact('names'));

        });
        Route::get('it/{name}',Function($name)
        {
            $names=$name;
        return view('pdf/show_it',compact('names'));

        });

        Route::middleware([
            'auth:sanctum',   config('jetstream.auth_session'), 'verified',
        ])->group(function () {

            Route::get('', function () {
                return view('index');
            })->name('dashboard');
        });


    Route::get('index_h',function()
    {

    return view('index');
    });


    //Route::get('marks/create',[MarksController::class,'create']);

   // Route::get('marks/show',[MarksController::class,'show']);
    Route::resource('mark',MarksController::class);
    Route::get('/search', [MarksController::class,'show'])->name('search');


    Route::get('REgister1',function()
    {

    return view('auth/register');

    });


    Route::get('track',function()
    {

    return view('track');
    });

