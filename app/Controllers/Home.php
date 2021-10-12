<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($halaman)
    {
        if ($halaman == 'halaman_home') {
            return view('halaman_home');
        } else if ($halaman == 'halaman_about') {
            return view('halaman_about');
        } else if ($halaman == 'halaman_contact') {
            return view('halaman_contact');
        } else {
            return view('errors/html/error_404');
        }
    }
}
