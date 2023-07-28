<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pembayaran;
use App\Models\statuse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    function history(string $id)
    {
        $pageTitle = 'history';
        $Pembayaran = Pembayaran::select("*")
                        ->where([
                            ["statuse_id", "=", 1],
                            ["user_id", "=", $id]
                        ])
                        ->get();

        return view('history', [
            'pageTitle' => $pageTitle,
            'Pembayaran' => $Pembayaran
        ]);
    }

    function history2(string $id)
    {
        $pageTitle = 'history';
        $Pembayaran = Pembayaran::select("*")
                        ->where([
                            ["statuse_id", "=", 2],
                            ["user_id", "=", $id]
                        ])
                        ->get();

        return view('history2', [
            'pageTitle' => $pageTitle,
            'Pembayaran' => $Pembayaran
        ]);
    }
}
