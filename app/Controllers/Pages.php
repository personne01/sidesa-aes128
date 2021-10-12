<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sidesa | Home'
        ];
        return view('pages/halaman_home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Sidesa | About'
        ];
        return view('pages/halaman_about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Sidesa | Contact'
        ];
        return view('pages/halaman_contact', $data);
    }
}
