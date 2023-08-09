<?php

namespace App\Http\Controllers\Public;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function paket()
    {
        $pakets = Paket::all();
        return view('public.paket', compact('pakets'));
    }
    
    public function info()
    {
        $pakets = Paket::all();
        return view('public.info', compact('pakets'));
    }

}