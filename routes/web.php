<?php

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::post('/register', function (Request $request) {

    $insert= new login();
    $insert->name=$request->name;
    $insert->password=$request->password;
    $insert->email=$request->email;
    $insert->save();
    return redirect('register')->with('success','register successfully');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ]);
    $user = login::where('name', $request->name)
                 ->where('password', $request->password)
                 ->where('email', $request->email)
                 ->first();


    if ($user) {
        auth()->login($user);
        return redirect('/')->with('success', 'Logged in successfully');
    } else {
        return redirect()->back()->withErrors(['email' => 'not match our records.']);
    }
})->name('login');
