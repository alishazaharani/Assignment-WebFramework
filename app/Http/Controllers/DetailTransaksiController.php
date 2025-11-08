<?php

namespace App\Http\Controllers;


use App\Models\DetailTransaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
public function index() {
        $details = DetailTransaksi::all();
        return view('detail_transaksis.index', compact('details'));
    }

    public function store(Request $request) {
        DetailTransaksi::create($request->all());
        return redirect()->back();
    }

    public function destroy($id) {
        DetailTransaksi::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function restore($id) {
        DetailTransaksi::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
}
