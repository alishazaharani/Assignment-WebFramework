<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
 public function index() {
        $keranjangs = Keranjang::all();
        return view('keranjangs.index', compact('keranjangs'));
    }

    public function store(Request $request) {
        Keranjang::create($request->all());
        return redirect()->back();
    }

    public function destroy($id) {
        Keranjang::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function restore($id) {
        Keranjang::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
}
