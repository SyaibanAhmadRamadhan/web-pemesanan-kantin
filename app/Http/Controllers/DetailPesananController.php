<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class DetailPesananController extends Controller
{
    public function detailPesananView()
    {
        $urlStatus = false;
        if (isset($_GET['state'])) {
            try {
                $decrypt = Crypt::decryptString($_GET['state']);
                $explode1 = explode(" ", $decrypt);
                $pesanan = DaftarMenuModel::where(function ($query) use ($explode1) {
                    foreach ($explode1 as $x) {
                        $query->orWhere('id', $x);
                    }
                })->get();
                $urlStatus = true;
            } catch (\Throwable $th) {
                $urlStatus = false;
                $pesanan = [];
            }
        } else {
            $urlStatus = false;
            $pesanan = [];
        }

        return view('pembeli.detail-pesanan', [
            'title' => 'detail-pesanan',
            'urlStatus' => $urlStatus,
            'pesanan' => $pesanan
        ]);
    }
}
