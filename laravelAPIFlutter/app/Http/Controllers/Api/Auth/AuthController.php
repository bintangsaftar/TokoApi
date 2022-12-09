<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewdata (Request $request){
        $validateData = $request->validate([
            'sb_kd_barang' => 'required|max:20',
            'nama_barang' => 'required|max:50',
            'kuantitas' => 'required|max:20',
            'size_barang' => 'required|max:20',
            'harga_barang' => 'required|max:20',
            'tgl_masuk' => 'required|max:20'
        ]);

        //create user
        $user = new User([
            'sb_kd_barang' => $request->sb_kd_barang,
            'nama_barang' => $request->nama_barang,
            'kuantitas' => $request->kuantitas,
            'size_barang' => $request->size_barang,
            'harga_barang' => $request->harga_barang,
            'tgl_masuk' => $request->tgl_barang,
        ]);

        $user->save();

        return response()->json($user, 201);
    }
}
