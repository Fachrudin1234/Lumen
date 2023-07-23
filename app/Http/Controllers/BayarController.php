<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarController extends Controller
{
    public function detailproduct(string $id)
    {
        $pageTitle = 'Pembayaran';
        $bayar= Pembayaran::find($id);

        return view('show', [
        'pageTitle' => $pageTitle,
        'bayar' => $bayar
    ]);
    }
}
