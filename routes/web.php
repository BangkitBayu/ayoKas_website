<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/counter', \App\Livewire\Counter::class)->name('counter');
Route::get('/register' , \App\Livewire\Form::class)->name('register');
