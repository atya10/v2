<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\MainController;
use App\Http\Controllers\PagesController;
//use App\Http\Controllers\ProductController;

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

// Route::get('/',function(){
//     $link = route('about');
//     return "<a href = '$link'> About Us </a>";
// });

// Route::get('/about',function(){
//     return'About Us ';
// }) -> name('about');

// Route::get('/course/{name}/{hours?}',function($name, $hours=0) {

//     if ($hours ==0 ) {

//         return "Course Name Is : $name";

//     }else {

//         return "Course Name Is : $name & Course Hours = $hours" ;

//     }


// })->name('course.single ');


// Route::get('subject/{name}',function($name){
//     return "Subject $name";
// }) -> whereAlpha('name');



//Route::get('/',[MainController::class, 'index']);



// index , about , team , services , blog , articles

// Route::get('/',[PagesController::class, 'index'])->name('index');
// Route::get('/about',[PagesController::class, 'about'])->name('about');
// Route::get('/team',[PagesController::class, 'team'])->name('team');
// Route::get('/services',[PagesController::class, 'services'])->name('services');
// Route::get('/blog',[PagesController::class, 'blog'])->name('blog');
// Route::get('/articles',[PagesController::class, 'articles'])->name('articles');

//Route::resource('products', ProductController::class);



Route::get ('/',       [PagesController::class, 'index'       ])->name('index'       );
Route::get ('/index',  [PagesController::class, 'index'       ])->name('index'       );
Route::get ('/about',  [PagesController::class, 'about'       ])->name('about'       );
Route::get ('/contact',[PagesController::class, 'contact'     ])->name('contact'     );
Route::post('/contact',[PagesController::class, 'contact_data'])->name('contact_data');



//
