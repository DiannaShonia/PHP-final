<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('admin.dashboard', compact('products'));
    }

    public function createProductIndex()
    {
        return view('admin.create');
    }
    public function createProduct(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect('/dashboard');
    }
    public function deleteProduct($id)
    {
        Product::destroy($id);
        return redirect('/dashboard');
    }
}
