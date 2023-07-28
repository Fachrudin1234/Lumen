<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pembayaran;
use App\Models\Status;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DatapembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'List Pembayaran';
        return view('admin.listpembayaran', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

        public function getData(Request $request)
        {
            $listpembayaran = Pembayaran::with('metode')->with('statuse')->with('product')->with('user');
            if ($request->ajax()) {
                return datatables()->of($listpembayaran)
                    ->addIndexColumn()
                    ->addColumn('menuadmin2', function($listpembayaran) {
                        return view('layouts.menuadmin2', compact('listpembayaran'));
                    })
                    ->toJson();
            }
        }
}
