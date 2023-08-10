<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {


    // function index() {

    //     return 'index page';
    // }

    // function about() {

    //     return 'about page';
    // }

    // function team() {

    //     return 'team page';
    // }

    // function services() {

    //     return 'services page';
    // }

    // function blog() {

    //     return 'blog page';
    // }

    // function articles() {

    //     return 'articles page';
    // }



        function index () {

            return view('index');
        }

        function about () {

            return view('about');
        }

        function contact () {

            return view('contact');
        }




}
