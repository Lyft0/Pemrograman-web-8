<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('about', $data);
    }
}
