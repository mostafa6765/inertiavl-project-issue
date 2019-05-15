<?php
use Inertia\Inertia;
use Illuminate\Http\Response;
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
Route::redirect('/', '/about');

Route::get('/about', function () {
  Khead::setTitle('about page');
  $event = "ok kamalmmmm";
  return Inertia::render('About', ['foo' => " ok 2019"])
                  ->with(['meta_description' => $event]);
});

Route::get('/contact', function () {
  Khead::setTitle('contact page');
  $event = "ok this is event";
  return Inertia::render('Contact')
                ->with(['meta_description' => $event]);
});

Route::get('/login', function () {
  dd("login first");
});
