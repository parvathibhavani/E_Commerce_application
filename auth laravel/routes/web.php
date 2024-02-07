<?php


use Illuminate\Support\Facades\Mail;
use App\Jobs\SendEmailJob;
use App\Mail\MailNotify;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;


use App\http\Controllers\SampleController;


Route::get('add-item',[SampleController::class,'additem'])->name('item.add');
Route::post('add-item',[SampleController::class,'saveitem'])->name('save.item');

Route::get('/item-list',[SampleController::class,'itemlist'])->name('item.list');

Route::get('/edit-item/{id}',[SampleController::class,'editlist'])->name('item.edit');

Route::get('/delete-item/{id}',[SampleController::class,'deleteitem'])->name('item.delete');

Route::post('/update-item',[SampleController::class,'updateitem'])->name('update.item');



Route::get('/Dashboard',[DashboardController::class])->middleware('auth');

Route::get('/home',[AuthController::class,'show'])->name('login');


Route::post('login',[AuthController::class,'login']);

Route::get('logout',[AuthController::class,'logout']);




Route::get('adduser',[AuthController::class,'adduser'])->name('add.user');
Route::post('saveuser',[AuthController::class,'saveuser'])->name('save.user');




use App\Jobs\Slowjob;

/*Route::get('/',function(){
    Slowjob::dispatch()->delay(5);

    return view('welcome');
})*/


use App\Events\TaskEvent;

Route::get('sendEmail',function(){
    
    return 'email is send properly';
});


Route::get('event',function(){
    event(new TaskEvent('hey, how are you!'));
});

