<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Conview';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Welcome to the About Page';
        return view('pages.about')->with('title',$title);
    }

    public function services(){
        $data = array(
            'title' => 'Welcome to the Services Page',
            'services' => ['T-Shirts', 'Sweatshirts/Hoodies', 'Accessories', 'Media']
        );
        return view('pages.services') ->with($data);
    }
}
