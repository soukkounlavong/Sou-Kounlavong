<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    function getProducts()
    {
        $products = ProductModel::all();
        return view('admin.product.getProducts', ['products' => $products]);
    }

    function getProductsByBand(Request $request)
    {
        $band = $request -> input ('selectBand');
        $products = ProductModel::where( 'band', $band) ->get();
        return view('admin.product.getProductsByBand', ['products' => $products]);
    }

    function deleteProduct ($pid)
    {
        $product = ProductModel::where('pid', $pid) ->first();
        $product ->delete();
        return redirect ('admin/product/getProducts')
        -> with("Note", "Xoá thành công!"); ;
    }
}

