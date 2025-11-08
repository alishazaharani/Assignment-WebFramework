<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
 public function index() {
        $transaksis = Transaksi::all();
        return view('transaksis.index', compact('transaksis'));
    }

    public function store(Request $request) {
        Transaksi::create($request->all());
        return redirect()->back();
    }

    public function destroy($id) {
        Transaksi::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function restore($id) {
        Transaksi::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
}
