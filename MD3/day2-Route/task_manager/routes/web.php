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
// tao 1 nhom route co tien to la customer
Route::prefix('customer')->group(function () {
    
    Route::get('index', function () {
        // hien thi danh sach khach hang 
      
    });
    
    Route::get('create', function (){
        // hien thi form tao moi khach hang 

    });
    
    
    Route::post('store', function (){
        // xu ly dl tao khach hang thong qua form voi method post
    
    });

    
    Route::get('show/{id}', function (){
        // hien thi chi tiet khach hang co ma dinh danh 
    
    });

    
    Route::get('edit/{id}', function(){
        //hien thi form chinh sua thong tin khach hang 
    
    });

    
    Route::patch('update/{id}', function(){
        //xu li thong tin dl thong tin khach hang duoc chinh sua thong qua Patch cua Form 
    
    });

    Route::delete('delete/{id}', function(){
        //xoa thong tin dl khach hang   

    });

});


