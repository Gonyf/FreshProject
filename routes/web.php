<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = request("name");

    return view('test', [
        "name" => $name
    ]);
});

Route::get('/test/{id}', function ($id) {
    $posts = [
        "blog1" => "this is the first one",
        "blog2" => "this is the second two"
    ];

    if (!array_key_exists($id, $posts)) {
        abort(404, "that thing is not found");
    }

    return view('test', [
        "name" => $posts[$id]
    ]);
});
