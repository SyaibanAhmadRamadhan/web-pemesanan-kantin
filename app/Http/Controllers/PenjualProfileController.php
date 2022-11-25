<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualProfileController extends Controller
{
    public function inputDataPenjual()
    {
        return view('penjual.input-data-penjual', [
            'title' => 'data-penjual'
        ]);
    }
    public function inputDataPenjualProccess()
    {
    }
}
