<?php

namespace App\Http\Controllers;

use App\Models\DaftarMenuModel;
use App\Models\PembeliModel;
use App\Models\PenjualModel;
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
                $getIdPenjual = DaftarMenuModel::distinct('id_penjual')->where(function ($query) use ($explode1) {
                    foreach ($explode1 as $x) {
                        $query->orWhere('id', $x);
                    }
                })->select('id_penjual')->get();
                $pesanan = PenjualModel::where(function ($query) use ($getIdPenjual) {
                    foreach ($getIdPenjual as $x) {
                        $query->orWhere('id_penjual', $x->id_penjual);
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
            'pesanan' => $pesanan,
            'search' => null,
            'pembeli' => PembeliModel::where('id_pembeli', Auth()->user()->id)->first(),
            'sessionPemesanan' => session()->get('pemesanan')
        ]);
    }

    public function updatePemesananSession(Request $request)
    {
        if ($request->valQty < 1) {
            return response()->json(['error' => 'pemesanan harus lebih dari 1']);
        }
        try {
            $obj = [];
            $obj[$request->qty] = $request->valQty;
            if ($request->session()->get('pemesanan')) {
                $result = array_merge($request->session()->get('pemesanan'), $obj);
                $request->session()->forget('pemesanan');
                $request->session()->put('pemesanan', $result);
            } else {
                $request->session()->put('pemesanan', $obj);
                $result = $request->session()->get('pemesanan');
            }
            foreach ($request->session()->get('pemesanan') as $key => $x) {
                # code...
            }
            $sessionPemesanan = $request->session()->get('pemesanan');
            $subTotal = 0;
            foreach ($sessionPemesanan as $key => $x) {
                $menu = DaftarMenuModel::where('id', substr($key, 3))->first();
                $subTotal += $menu->price * $x;
            }
            $menu = DaftarMenuModel::where('id', substr($request->qty, 3))->first();
            $total = $menu->price * $request->valQty;
            return response()->json(['total' => $total, 'subTotal' => $subTotal]);
        } catch (\Throwable $th) {
            return response()->json(['error500' => 'terjadi kesalahan pada server']);
        }
    }

    public function deletePemesananProcess($id)
    {
        if (!session()->get('pemesanan')) {
            return redirect()->back()->with('info', 'masukan pesanan terlebih dahulu');
        }
        $pemesananUnset = session()->get('pemesanan');
        unset($pemesananUnset['qty' . $id]);
        session()->forget('pemesanan');
        session()->put('pemesanan', $pemesananUnset);
        $pemesanan = session()->get('pemesanan');
        $product =  DaftarMenuModel::where(function ($query) use ($pemesanan) {
            foreach ($pemesanan as $key => $x) {
                $query->orWhere('id', substr($key, 3));
            }
        })->get();
        foreach ($product as $key => $x) {
            $idMenu[] = $x->id;
        };
        $implodeMenu = implode(" ", $idMenu);
        $encyrptImplodeMenu = Crypt::encryptString($implodeMenu);
        return redirect()->route('detail.pesanan.view', ['state' => $encyrptImplodeMenu]);
    }
}
