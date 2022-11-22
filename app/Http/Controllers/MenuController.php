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
            'category' => $category,
            'search' => null
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

    public function searchView()
    {
        if (isset($_GET['search'])) {
            $searchGet = $_GET['search'];
            $DaftarMenu = DaftarMenuModel::distinct('id_category')->where('name_menu', 'LIKE', '%' . $_GET['search'] . '%')->get('id_category');
            if (count($DaftarMenu) != 0) {
                $category = CategoryModel::where(function ($query) use ($DaftarMenu) {
                    foreach ($DaftarMenu as $key => $x) {
                        $query->orWhere('id', $x->id_category);
                    }
                })->get();
                $menu = DaftarMenuModel::where('name_menu', 'LIKE', '%' . $_GET['search'] . '%')->get();
            } else {
                $category = [];
                $menu =  [];
            }
        } else {
            $searchGet = null;
            $menu = [];
            $category = [];
        }

        return view('pembeli.menu', [
            'title' => 'menu',
            'menu' => $menu,
            'category' => $category,
            'search' => $searchGet
        ]);
    }
}
