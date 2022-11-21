<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menuView()
    {
        return view('pembeli.menu', [
            'title' => 'menu'
        ]);
    }
}
