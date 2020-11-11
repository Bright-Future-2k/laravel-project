<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use App\Http\Resources\Product as ProductResources;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'status' => 200,
            'message' => 'Danh sach san pham',
            'product' => $products,
        ]);
    }
    public function store (StoreProductRequest $request)
    {
        $product = Product::create($request->all());
        return response()->json([
            'status' => 201,
            'message' => 'Them thanh cong',
            'product' => $product,
        ]);
    }

    public function update(UpdateProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json([
            'status' => 200,
            'message' => 'cap nhat thanh cong',
            'product' => $product
        ]);
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'status' => 200,
            'message' => 'OK!',
            'product' => $product
        ]);

    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json([
            'status' => 204,
            'message' => 'delete success !',
        ]);
    }
}
