<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = \App\Models\Info::first();
        $kontak = \App\Models\Kontak::first();
        $partners = \App\Models\Partner::all();
        return view('public.info', compact('info', 'kontak','partners'));
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
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'tentang' => 'required|string',
            'tentang_foto' => 'image|mimes:jpeg,png,jpg,gif',
            'histori' => 'required|string',
            'historifoto' => 'image|mimes:jpeg,png,jpg,gif',
        ]);


        $info = Info::first();
        $info->tentang = $request->input('tentang');
        $info->histori = $request->input('histori');
        if ($request->hasFile('tentang_foto') && $request->file('tentang_foto')->isValid()) {
            $bgImagePath = $request->file('tentang_foto')->store('public/images');
            $bgImageFileName = basename($bgImagePath);
            $info->tentang_foto = $bgImageFileName;
        }
        if ($request->hasFile('histori_foto') && $request->file('histori_foto')->isValid()) {
            $bgImagePath = $request->file('histori_foto')->store('public/images');
            $bgImageFileName = basename($bgImagePath);
            $info->histori_foto = $bgImageFileName;
        }
        $info->save();
        return redirect()->back()->with('success', 'Data info Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
