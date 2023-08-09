<?php

use Illuminate\Support\Facades\Route;


Route :: prefix ('user') -> name ('user.') -> group (function () {

  Route :: get ( 'profile', function () {
    return 'User profile';
  }) -> name ('profile');

  Route :: get ( 'courses', function () {
    return 'User courses';
  }) -> name ('courses');

  Route ::get ( 'comments', function () {
    return 'User comments';
  }) -> name ('comments');

  Route :: get ( 'posts', function () {
    return 'User posts';
  }) -> name('posts');


});


Route::match(['put','patch','get'],'/update',function(){
    return "Updated";
});


// Route::get('/',);

//
