<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Post;
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

Route::get('/', function (Request $request) {
    $firstRecord = Post::first(); 
    $id=$firstRecord->id;
    if(request()->has('post')){
        $id = request()->query('post');
        $firstRecord = Post::find(intval(request()->query('post')));
    }
    return view('Home',['Posts'=>Post::all(),'id'=>intval($id),'content'=>$firstRecord,]);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

