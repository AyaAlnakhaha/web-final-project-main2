<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryAll()
    {
        $categories = Category::all();

        return response()->json([
            'message'=>'welcome to catogries api',
            'data'=>[
                'categories' => CategoryResource::collection($categories),
            ]
        ],201);

    }

    public  function  search()
    {
        $txtSearch = request('search');
        $product = Product::query()
            ->where('name','Like',"%{$txtSearch}%")
            ->orwhere('price','Like',"%{$txtSearch}%")->get();

        return response()->json([
            'message' => 'product has been  successfully',
            'data' => [
                'product' => ProductResource::collection($product),
            ]
        ], 201);

    }





}
