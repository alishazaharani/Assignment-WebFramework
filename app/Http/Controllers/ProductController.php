<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
 public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request) {
        Product::create($request->all());
        return redirect()->back();
    }

    public function destroy($id) {
        Product::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function restore($id) {
        Product::withTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }
}
