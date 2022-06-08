<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getItemByCategory($id){
        $product = Product::where("category_id",$id)->get();

        return response()->json([
            'message'=>'welcome to item category api',
            'data'=>[
                'product' => ProductResource::collection($product),
            ]

        ],201);

    }

    public function description($id)
    {
        $description = Product::where("id", $id)->get();

        return response()->json([
            'message' => 'description has been  successfully',
            'data' => [
                'description' => ProductResource::collection($description),
            ]
        ], 201);

    }

}
