<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin()
    {
        $pageTitle = 'Admin';

        return view('admin.login', ['pageTitle' => $pageTitle]);
    }
}
