<?php

namespace App\Http\Controllers;

use App\Models\PenjualModel;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class RegisterController extends Controller
{
    public function registerPembeliView()
    {
        return view('authentication.register-pembeli', [
            'title' => 'register'
        ]);
    }

    public function registerPenjualView()
    {
        return view('authentication.register-penjual', [
            'title' => 'register'
        ]);
    }

    public function registerProcess(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'nama_warung' => 'required|unique:penjual',
            'email' => 'email:rfc,dns|unique:users',
            'password' => 'min:6|confirmed',
        ]);
        if ($validator->passes()) {
            try {
                if ($request->role == 'pembeli') {
                    User::create([
                        'username' => $request->username,
                        'role' => $request->role,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ]);
                } elseif ($request->role == 'penjual') {
                    $userPenjual = User::create([
                        'username' => $request->username,
                        'role' => $request->role,
                        'email' => $request->email,
                        'password' => bcrypt($request->password),
                    ]);
                    PenjualModel::create([
                        'id_penjual' => $userPenjual->id,
                        'nama_warung' => $request->nama_warung
                    ]);
                }
            } catch (\Throwable $th) {
                return response()->json(['error500' => 'terjadi kesalahan']);
            }
            return response()->json(['success' => 'pendaftaran berhasil']);
        }
        return response()->json(['error' => $validator->errors()]);
    }
}
