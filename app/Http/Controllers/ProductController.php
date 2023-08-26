<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
        
    }

    public function indexApi(){
        $products = Product::all();
        return response($products, 200);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));

    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function showApi(Product $product){
        return response($product, 200);
    }

    public function updateProductApi(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return response([
            'message' => 'Product id: ' . $product->id . ' updated successfully'
        ], 200);

    }

    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }

    public function destroyProductApi(Product $product){
        $product->delete();
        return response([
            'message' => 'Product id: ' . $product->id . ' deleted successfully'
        ], 200);
    }

    public function storeProductApi(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);

        return response([
            'message' => 'Product id: ' . $newProduct->id . ' created successfully'
        ], 201);

    }

}