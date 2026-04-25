<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.products.product', compact('products'));
    }

    public function create()
    {
        return view('components.add');
    }
    
    public function store(Request $req)
    {

        $req->validate([
            'name_product' => 'required|min:3',
            'harga' => 'required|numeric',
            'deskripsi_product' => 'required|max:50',

           
        ],[
            'name_product.min' => 'nama minimal 3 karakter'
        ]);

        Product::create([
            'name_product' => $req->name_product,
            'harga' => $req->harga,
            'deskripsi_product' => $req->deskripsi_product,
        ]);
    
        return redirect()->route('product.index');
    }

    //edit/update
    public function edit($id)
    {
        $data = Product::findOrfail($id);
        return view('components.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $data = Product::findOrFail($id);
        
        $data->update($req->all());

        return redirect()->route('product.index', compact('data'));

    }

    public function show($id){
        $data = Product::findOrFail($id);
        // DB::table('tb_products')->where('id_product',$id)->firstOrFail();
        return view('components.show', compact('data'));
    }  

    //delete
    public function destroy($id)
    {
        $data = Product::findOrFail($id);

        $data->delete();

        return redirect()->route('product.index');
    }
}
