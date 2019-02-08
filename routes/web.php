<?php

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

Route::get('/',"HomeController@index")->name('home');

Route::get('/new-note',"NewNoteController@index")->name('new-note');
Route::post('/new-note-submit',"NewNoteController@addNewNote")->name('new-note-submit');

Route::get('/edit-note/{id}',"EditController@index")->name('edit-note');
Route::post('/note-edit/{id}',"EditController@editNote")->name('note-edit');

Route::delete('/note-delete/{id}',"HomeController@deleteNote")->name('note-delete');