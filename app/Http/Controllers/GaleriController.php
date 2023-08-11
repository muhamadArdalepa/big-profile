<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GaleriController extends Controller
{
    public function proyek()
    {
        $fotos = \App\Models\Galeri::select('foto','title','subtitle')->where('jenis',0)->orderBy('id','desc')->get();
        return view('public.galeri-proyek', compact('fotos'));
    }
    public function internal()
    {
        $fotos = \App\Models\Galeri::select('foto','title','subtitle')->where('jenis',1)->orderBy('id','desc')->get();
        return view('public.galeri-internal', compact('fotos'));
    }
    public function edit_proyek()
    {
        $galeris = \App\Models\Galeri::where('jenis',0)->orderBy('id','desc')->get();
        return view('admin.galeri-proyek', compact('galeris'));
    }
    public function edit_internal()
    {
        $galeris = \App\Models\Galeri::where('jenis',1)->orderBy('id','desc')->get();
        return view('admin.galeri-internal', compact('galeris'));
    }
    public function store(Request $request)
    {
        
        $required = $request->is_edit == 0 ? 'required|image':'nullable';
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'jenis' => 'required',
            'subtitle' => 'required',
            'foto' => $required,
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages()
            ]);
        } else {
            if ($request->is_edit == 1) {
                $galeri = Galeri::find($request->id);
                
            }else{
                $galeri = new Galeri;

            }
            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
                // Upload the new image
                $bgImagePath = $request->file('foto')->store('public/images');
                // Extract only the file name from the full path
                $bgImageFileName = basename($bgImagePath);
                // Store the image file name in the bg_image field of the Home model
                $galeri->foto = $bgImageFileName;
            }
            $galeri->jenis = $request->jenis;
            $galeri->title = $request->title;
            $galeri->subtitle = $request->subtitle;
            $galeri->save();
            return response()->json([
                'status' => 201,
                'message' => 'Foto baru telah ditambahkan',
            ]);
        }
    }

    public function destroy(Request $request)
    {
        if (Galeri::destroy($request->id)) {
            return response()->json([
                'status' => 201,
                'message' => 'Galeri telah dihapus',
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'Gagal Menghapus',
        ]);
    }
}
