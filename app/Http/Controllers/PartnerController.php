<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $required = $request->is_edit == 0 ? 'required|image' : 'nullable';
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'logo' => $required,
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            if ($request->is_edit == 1) {
                $partner = Partner::find($request->id);
            } else {
                $partner = new Partner;
            }
            if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                // Upload the new image
                $bgImagePath = $request->file('logo')->store('public/images');
                // Extract only the file name from the full path
                $bgImageFileName = basename($bgImagePath);
                // Store the image file name in the bg_image field of the Home model
                $partner->logo = $bgImageFileName;
            }
            $partner->nama = $request->nama;
            $partner->save();
            return response()->json([
                'status' => 201,
                'message' => 'Partner baru telah ditambahkan',
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
        $partners = \App\Models\Partner::orderBy('id', 'desc')->get();
        return view('admin.partner', compact('partners'));
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
        if (Partner::destroy($request->id)) {
            return response()->json([
                'status' => 201,
                'message' => 'Partner telah dihapus',
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'Gagal Menghapus',
        ]);
    }
}
