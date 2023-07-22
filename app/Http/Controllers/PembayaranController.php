<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function pembayaran(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'unic' => 'Isi :attribute dengan format yang benar',
            'numeric' => 'Isi :attribute dengan angka'
        ];

        $validator = Validator::make($request->all(), [
            'alamat' => 'required',
            'nama_penerima' => 'required',
            'no' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $pembelian = New Pembayaran;
        $pembelian->nama_penerima = $request->nama_penerima;
        $pembelian->alamat = $request->alamat;
        $pembelian->no_hp = $request->no;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->metode = $request->metode;
        $pembelian->status = "Belum di bayar";
        $pembelian->user_id = $request->iduser;
        $pembelian->product_id = $id;
        $pembelian->save();

        return redirect()->route('product.index');


    }
}
