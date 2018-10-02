<?php

use App\Navbar;
use Illuminate\Http\Request;
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

Route::get('/', function()
{
    return redirect()->route('home');
})->name('root');

Route::get('/features', function () {
    $navbar = new Navbar('features');
    return view('public.features', ['navbar' => $navbar]);
})->name('public.features');

Route::get('/pricing', function () {
    $navbar = new Navbar('pricing');
    return view('public.pricing', ['navbar' => $navbar]);
})->name('public.pricing');

Route::get('/about', function () {
    $navbar = new Navbar('about');
    return view('public.about', ['navbar' => $navbar]);
})->name('public.about');

Route::get('/signup', function () {
    $navbar = new Navbar('signup');
    return view('auth.register', ['navbar' => $navbar]);
})->name('public.signup');

Route::get('/login', function () {
    $navbar = new Navbar('login');
    return view('public.login', ['navbar' => $navbar, 'username' => '']);
})->name('public.login');

Route::post('/login', function (Request $request) {
    $navbar = new Navbar('login');

    $username = $request->input('username');

    $password = $request->input('password');

    if (strlen($password) > 0)
    {
        return redirect()->route('subscriber.dashboard');
    }

    return view('public.login', ['navbar' => $navbar, 'username' => $username]);
})->name('public.login');

Route::get('/dashboard', function () {
    $navbar = new Navbar();
    return view('subscriber.dashboard', ['navbar' => $navbar]);
})->name('subscriber.dashboard');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
