<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualDashboardController extends Controller
{
    public function dashboardView()
    {
        return view('penjual.dashboard', [
            'title' => 'dashboard'
        ]);
    }
}
