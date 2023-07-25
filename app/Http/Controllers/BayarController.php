<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pembayaran;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BayarController extends Controller
{
    public function bayar(string $id)
    {
        $pageTitle = 'Pembayaran';
        $bayar= Pembayaran::find($id);
        $vc = 3598560000 + $id;


        return view('bayar', [
        'pageTitle' => $pageTitle,
        'bayar' => $bayar,
        'vc' => $vc
    ]);
    }
}
