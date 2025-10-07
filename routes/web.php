<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webprogramming', function () {
    return "Wellcome to Web Programming Exercises";
})->name('exercises');

Route::get('/testhtml', function () {
    return "<h1>Wellcome to Web Programming<h1>";
});

Route::get('/linktest', function () {
    $url = route('exercises');
    return "<a href='$url'>Click here</a>";
})->name('exercises');

Route::get('/api/users', function () {
    return [
        'name' => 'test user',
        'email' => 'testuser@gmail.com'
    ];
});

//     In terminal run: php artisan route:list, you will get

//   GET|HEAD       / ..................................................... 
//   GET|HEAD       api/users ............................................. 
//   GET|HEAD       linktest .................................... exercises
//   GET|HEAD       storage/{path} .......................... storage.local
//   GET|HEAD       testhtml .............................................. 
//   GET|HEAD       up .................................................... 
//   GET|HEAD       webprogramming .............................. exercises

Route::get('/testid/{id}', function ($id) {
    return "Wellcome to Web Programming the id in url is:".$id;
});

Route::get('/testrequest', function (Request $request) {
    return [
        'url' => $request->url(),
        'fullUrl' => $request->fullurl(),
        'path' => $request->path(),
        'ip' => $request->ip(),
        'header' => $request->header(),
    ];
});

Route::get('/testrequest1', function (Request $request) {
    return [
        'url' => $request->url(),
        'fullUrl' => $request->fullurl(),
        'path' => $request->path(),
        'ip' => $request->ip(),
        'header' => $request->header(),
    ];
});

Route::get('/users', function (Request $request) {
    return $request->query('name');
});
//in url write http://webprogramminglab.test/users?name=test

Route::get('/response', function () {
    return response('Hello from response', 200);
});

Route::get('/error', function () {
    return response('Page not found', 404);
});

Route::get('/json', function () {
    return response()->json(['name'=>'test']);
});

Route::get('/download', function () {
    return response()->download(public_path('favicon.ico'));
});

Route::get('/cookie', function () {
    return response()->json(['name'=>'test'])->cookie('mycookie','test');
});