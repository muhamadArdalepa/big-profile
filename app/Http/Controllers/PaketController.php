<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = Paket::orderBy('id', 'desc')->where('is_promo', 0)->get();
        $promos = Paket::orderBy('id', 'desc')->where('is_promo', 1)->get();
        return view('public.paket', compact('pakets', 'promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'is_promo' => 'required',
            'subtitle' => 'required',
            'kecepatan' => 'required|numeric',
            'harga' => 'required|numeric',
            'include' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            if ($request->is_edit == 1) {
                $paket = Paket::find($request->id);
            } else {
                $paket = new Paket;
            }
            $paket->is_promo = $request->is_promo;
            $paket->title = $request->title;
            $paket->subtitle = $request->subtitle;
            $paket->kecepatan = $request->kecepatan;
            $paket->harga = $request->harga;
            $paket->include = $request->include;
            $paket->save();
            return response()->json([
                'status' => 201,
                'message' => 'Paket telah diupdate',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $pakets = Paket::where('is_promo', 0)->get();
        return view('admin.paket', compact('pakets'));
    }
    public function promo()
    {
        $pakets = Paket::where('is_promo', 1)->get();
        return view('admin.promo', compact('pakets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (Paket::destroy($request->id)) {
            return response()->json([
                'status' => 201,
                'message' => 'Paket telah dihapus',
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'Gagal Menghapus',
        ]);
    }
}
