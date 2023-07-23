<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pembayaran;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    function history()
    {
        $pageTitle = 'history';
        $Pembayaran = Pembayaran::select("*")
                        ->where("statuse_id", 1)
                        ->get();


        return view('history', [
            'pageTitle' => $pageTitle,
            'Pembayaran' => $Pembayaran
        ]);
    }
}
