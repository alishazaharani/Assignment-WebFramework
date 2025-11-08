<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
public function index() {
        $pelanggans = Pelanggan::all();
        return view('pelanggans.index', compact('pelanggans'));
    }

    public function store(Request $request) {
        Pelanggan::create($request->all());
        return redirect()->back();
    }

    public function destroy($id) {
        Pelanggan::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function restore($id) {
        Pelanggan::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
}
