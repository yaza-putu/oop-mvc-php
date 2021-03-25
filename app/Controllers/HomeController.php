<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;

class HomeController
{
    public function index()
    {
        $data['wow'] = User::orderBy('id','asc')->get();
        return View::render('index', $data);
    }
}