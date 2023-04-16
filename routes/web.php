<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mails', MailController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('send-mail', function(){
    Mail::to(request()->destinatario)->send(new SendMail(request()->mensaje, request()->asunto, request()->attached));
    return redirect()->route('home')->with('success', 'message sent');
})-> name('send-mail');

