<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualMenuController extends Controller
{
    public function addMenuView()
    {
        return view('penjual.menu.create-menu', [
            'title' => 'tambah-menu'
        ]);
    }

    public function editMenuView()
    {
        return view('penjual.menu.update-menu', [
            'title' => 'edit-menu'
        ]);
    }

    public function dataMenuView()
    {
        return view('penjual.menu.read-menu', [
            'title' => 'data-menu'
        ]);
    }
}
