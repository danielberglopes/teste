<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Contracts\Session\Session;
use App\Models\Videos;
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


Route::get('/', [LoginController::class, 'login'])->name('index');
Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('browser', [LoginController::class,'browser'])->name('browser');

Route::post('/logar-osuario', function(Request $request){
    

    $credentials = $request->only('email', 'password');
  !empty($request->remeber) ? $lembrar = true : $lembrar = false;
    if(Auth::attempt($credentials,$lembrar )){
        return redirect()->route('index');
    }
});

Route::post('/cadastro', function(Request $request){
    $user = new User();
    $user->email = $request->email;
    $user->password = bcrypt($request->password);
  $saved =  $user->save();

  if($saved){
    return redirect()->route('index');
  }
});

Route::post('/adicona-filme', function (Request $request){
   $Videos = new Videos();
   $Videos->url = "";
   $Videos->created_at ="";
   $Videos->category_id="";
   $Videos->tltle="";
   $Videos->description="";
   $Videos->slug="";
   $Videos->lmage="";
   $Videos->	featured="";
   $Videos->activated = 1;

   $saved = $Videos->save();
   if($saved){

   }
   return redirect()->route('browser');
});