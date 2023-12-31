<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Paket;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = Home::first();
        $pakets = Paket::all();
        return view('public.home', compact('home', 'pakets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $home = \App\Models\Home::first();
        $info = \App\Models\Info::first();
        $kontak = \App\Models\Kontak::first();
        return view('admin.home', compact('home','info','kontak'));
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
            'headerTitle' => 'required|string',
            'headerSubtitle' => 'required|string',
            'headerImage' => 'image|mimes:jpeg,png,jpg,gif',
            'karyawan' => 'required|numeric',
            'user' => 'required|numeric',
            'partner' => 'required|numeric',
            'keunggulan' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
        ]);


        $home = Home::first();
        $home->title = $request->input('headerTitle');
        $home->subtitle = $request->input('headerSubtitle');
        if ($request->hasFile('headerImage') && $request->file('headerImage')->isValid()) {
            // Upload the new image
            $bgImagePath = $request->file('headerImage')->store('public/images');
            // Extract only the file name from the full path
            $bgImageFileName = basename($bgImagePath);
            // Store the image file name in the bg_image field of the Home model
            $home->bg_image = $bgImageFileName;
        }
        $home->karyawan = $request->input('karyawan');
        $home->user = $request->input('user');
        $home->partner = $request->input('partner');
        $home->keunggulan = $request->input('keunggulan');
        $home->visi = $request->input('visi');
        $home->misi = $request->input('misi');
        $home->save();
        return redirect()->back()->with('success', 'Data Home Berhasil Diupdate!');
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
