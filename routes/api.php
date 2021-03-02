<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/search', function (Request $request) {
    $filter = $request->query('search');
    if (!$request->search) {
        return response()->json(['success' => false, 'msg' => 'something went wrong please try again']);
    }
    $products = Product::query()->search($filter)->get();
    if ($products) {
        return response()->json(['success' => true, 'products' => $products]);
    } else {
        return response()->json(['success' => false, 'msg' => 'something went wrong please try again']);
    }
});
