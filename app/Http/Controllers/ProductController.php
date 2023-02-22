<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbeledu(){
        return redirect()->to('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function marbelandfriend(){
        return redirect()->to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function marbelriri(){
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }
    
    public function kolakkids(){
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }

}
