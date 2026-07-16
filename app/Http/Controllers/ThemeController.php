<?php

namespace App\Http\Controllers;

use app\Models\Category;
use Illuminate\Http\Request;

class ThemeController extends Controller
{


    // Function Appel Page INDEX
    public function index ()
    {
        return view('theme.index');
    }

    // Function Appel Page CATEGORY
    public function category ()
    {
        return view('theme.category');
    }

    // Function Appel Page CONTACT
     public function contact ()
    {
        return view('theme.contact');
    }

 
    // Function Appel Page SINGLE-BLOG
      public function singBlog ()
    {
        return view('theme.single-blog');
    }

  

     

}
