<?php

namespace App\Http\Controllers\control_panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function getData(Request $request)
    {
//        dd($areas);
        $columns = array(
            array( 'db' => 'name',          'dt' => 1 ),
            array( 'db' => 'category_id',   'dt' => 2 ),
            array( 'db' => 'price',         'dt' => 3 ),
//            array( 'db' => 'description',   'dt' => 4 )
        );

        $draw = (int)$request->draw;
        $start = (int)$request->start;
        $length = (int)$request->length;
        $order = $request->order[0]["column"];
        $direction = $request->order[0]["dir"];
        $search = trim($request->search["value"]);


        $value = array();

        if(!empty($search)){
            $count = Product::search($search)
                ->count();
                $items = Product::search($search)
                ->limit($length)->offset($start)->orderBy($columns[$order]["db"], $direction)
                ->get();
        } else {
            $count = Product::count();
            $items = Product::
            limit($length)->offset($start)->orderBy($columns[$order]["db"], $direction)
                ->get();
        }
        foreach ($items as $index => $item){
//            dd($item->unPaidMaterials);
            array_push($value , $item->product_display_data);
        }
        return [
            "draw" => $draw,
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => (array)$value,
            "order" => $columns[$order]["db"]
        ];
//        return $areas;
    }
    public function getDataByCategory(Request $request)
    {
//        dd($areas);
        $columns = array(
            array( 'db' => 'name',          'dt' => 1 ),
            array( 'db' => 'category_id',   'dt' => 2 ),
            array( 'db' => 'price',         'dt' => 3 ),
//            array( 'db' => 'description',   'dt' => 4 )
        );

        $draw = (int)$request->draw;
        $start = (int)$request->start;
        $length = (int)$request->length;
        $order = $request->order[0]["column"];
        $direction = $request->order[0]["dir"];
        $search = trim($request->search["value"]);


        $value = array();

        if(!empty($search)){
            $count = Product::search($search)
                ->count();
                $items = Product::search($search)
                ->limit($length)->offset($start)->orderBy($columns[$order]["db"], $direction)
                ->get();
        } else {
            $count = Product::count();
            $items = Product::
            limit($length)->offset($start)->orderBy($columns[$order]["db"], $direction)
                ->get();
        }
        foreach ($items as $index => $item){
//            dd($item->unPaidMaterials);
            array_push($value , $item->product_display_data);
        }
        return [
            "draw" => $draw,
            "recordsTotal" => $count,
            "recordsFiltered" => $count,
            "data" => (array)$value,
            "order" => $columns[$order]["db"]
        ];
//        return $areas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function create()
    {
        $product = new Product();
        $categories = Category::get();
        return response()->json(['view'=>view('product.create',compact('product','categories'))->render(),'product_id'=>$product->id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        dd($request->all());
//        $product = Product::create([
//            'name' => $request->name,
//            'description' => $request->description,
//            'category_id' => $request->category_id,
//            'price' => $request->price,
//            'image'=>$request->image->store('public', 'public')
//        ]);
        $product = new Product();
        $product->name = request('name');
        $product->description = request('description');
        $product->category_id = request('category_id');
        $product->price = request('price');
        $product->image = request()->file('storeImage')->store('images');
        $product->save();

        return response()->json(['msg'=>'new product data is created successfully','type'=>'success','title'=>'Create']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $prodect
     * @return \Illuminate\Http\Response
     */
    public function show(Product $prodect)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $prodect
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return response()->json(['view'=>view('product.update',compact('product','categories'))->render(),'product_id'=>$product->id]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $prodect
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->name = $request->input('name');
           $product->description = $request->input('description');
           $product->category_id = $request->input('category_id');
           $product->price = $request->input('price');
//        'past_medical_history_id'=>isset($request->past_medical_history_id) ? $request->past_medical_history_id : null,

           $product->save();
        return response()->json(['msg'=>'a product data is updated successfully','type'=>'success','title'=>'Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $prodect
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['msg'=>'a product data is deleted successfully','type'=>'success','title'=>'Delete']);

    }



}
