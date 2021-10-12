<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Sidesa | Login'
        ];
        return view('pages/halaman_login', $data);
    }
}
