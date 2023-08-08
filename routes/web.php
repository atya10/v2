<?php

use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//  return 'homepage';
// });

// //Route::method('url','action')

// Route::get('url',function(){
// return '';
// });

// Route::post('url',function(){
//     return '';
//     });

// Route::put('url',function(){
//         return '';
//         });


// Route::patch('url',function(){
//     return '';
//     });

// Route::delete('url',function(){
//     return '';
//     });

// Route::options('url',function(){
//     return '';
//     });



// Route::get('/',function(){
//     return "";
// });

// Route::get('/about',function(){
//     return "";
// });

// Route::get('/contact',function(){
//     return "";
// });

// Route::get('',function(){
// return '';
// });

// Route :: get ('',function(){
//     return '';
// });

// Route :: get('',function(){
//     return '';
// });

// Route :: get ('',function(){
//     return '';
// });

// Route :: get ('',function(){
//     return '';
// });

// Route :: get ('',function(){
//     return '';

// }); 

// Route :: get ( '/',function(){
//     return 'homepage';
// });

// index, about, contact, services, our team , blog 

Route::get('/',function(){
    $link = route('about');
    return "<a href = '$link'> About Us </a>";
});

Route::get('/aboutssssss',function(){
    return'About Us ';
}) -> name('about');

Route::get('/course/{name}/{hours?}',function($name, $hours=0) {

    if ($hours ==0 ) {

        return "Course Name Is : $name";

    }else {

        return "Course Name Is : $name & Course Hours = $hours" ;

    }

    
})->name('course.single ');


Route::get('subject/{name}',function($name){
    return "Subject $name";
}) -> whereAlpha('name');