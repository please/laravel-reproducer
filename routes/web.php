<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $user  = \App\Models\User::create(
        [
            'name' => fake()->name,
            'email' => fake()->email,
            'phone' => fake()->phoneNumber,
            'password' => \Illuminate\Support\Facades\Hash::make('secret'),
        ],
    );

    return response()->json($user);
});
