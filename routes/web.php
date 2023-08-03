<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
 return 'homepage';
});

//Route::method('url','action')

Route::get('url',function(){
return '';
});

Route::post('url',function(){
    return '';
    });

Route::put('url',function(){
        return '';
        });


Route::patch('url',function(){
    return '';
    });

Route::delete('url',function(){
    return '';
    });

Route::options('url',function(){
    return '';
    });



Route::get('/',function(){
    return "";
});

Route::get('/about',function(){
    return "";
});

Route::get('/contact',function(){
    return "";
});
