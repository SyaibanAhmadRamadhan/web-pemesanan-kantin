<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileView()
    {
        return view('pembeli.profile', [
            'title' => 'profile'
        ]);
    }

    public function profileEditProcess(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required|unique:users,username,' . Auth()->user()->id . ',id',
            'email' => 'required|unique:users,email,' . Auth()->user()->id . ',id',
        ]);
        try {
            User::where('id', Auth()->user()->id)->update([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'mobile_phone' => $request->mobile_phone,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);
            return redirect()->route('profile.view')->with(['success' => 'profile berhasil diubah']);
        } catch (\Throwable $th) {
            return redirect()->route('profile.view')->with(['error' => 'terjadi kesalah error 500']);
        }
    }
}
