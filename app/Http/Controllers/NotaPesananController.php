<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenuModel;
use App\Models\PembeliModel;
use App\Models\PenjualModel;
use App\Models\PesananModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class NotaPesananController extends Controller
{
    public function notaView($id)
    {
        $pesanan = PesananModel::where('nomer_pesanan', $id)->get();
        $menu = PenjualModel::where(function ($query) use ($pesanan) {
            foreach ($pesanan as $key => $x) {
                $query->orWhere('id', $x->id_warung);
            }
        })->get();
        return view('pembeli.nota-pemesanan', [
            'title' => 'nota-pesanan',
            'search' => null,
            'pesanan' => $pesanan,
            'menu' => $menu
        ]);
    }
}
