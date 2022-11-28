<?php

namespace App\Http\Controllers;

use App\Models\NotifPenjualModel;
use Illuminate\Http\Request;

class PenjualDashboardController extends Controller
{
    public function dashboardView()
    {
        $notif = NotifPenjualModel::where('status', 'unread')->where('id_penjual', Auth()->user()->id)->get();
        return view('penjual.dashboard', [
            'title' => 'dashboard',
            'notif' => $notif,
        ]);
    }
}
