<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

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
Route::post('/download', function (Request $request) {
    $content = $request->content;
    $url_photo = $request->file('photo');
    $url_photo = str_replace('public', asset('/storage/'), $url_photo->store('/public'));
    header("Content-type: text/html");
    header("Content-Disposition: attachment; filename=view.html");
    return view('download', compact('url_photo', 'content'));
})->name('download');
