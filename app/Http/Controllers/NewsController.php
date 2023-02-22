<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id){
        return redirect()->to('https://www.educastudio.com/news/'.$id);
    }
    public function news2(){
        return redirect()->to('https://www.educastudio.com/news');
    }
}
