<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function edit()
    {
        $pesans = Pesan::all();
        return view('admin.pesan', compact('pesans'));
    }
    public function destroy(Request $request)
    {
        if (Pesan::destroy($request->id)) {
            return response()->json([
                'status' => 201,
                'message' => 'Pesan telah dihapus',
            ]);
        }
        return response()->json([
            'status' => 400,
            'message' => 'Gagal Menghapus',
        ]);
    }
}
