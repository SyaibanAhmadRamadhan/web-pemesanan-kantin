<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\DaftarMenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menuView()
    {
        $menu = DaftarMenuModel::all();
        $category = CategoryModel::all();
        return view('pembeli.menu', [
            'title' => 'menu',
            'menu' => $menu,
            'category' => $category
        ]);
    }

    public function pemesananProcess(Request $request)
    {

        $pemesanan = $request->objectPemesanan;
        $product =  DaftarMenuModel::where(function ($query) use ($pemesanan) {
            foreach ($pemesanan as $key => $x) {
                $query->orWhere('id', substr($key, 3));
            }
        })->get();
        return response()->json(['data' => $product]);
    }
}
