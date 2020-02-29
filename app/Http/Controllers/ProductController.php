<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

use Ramsey\Uuid\Uuid;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['category' , 'merchant'])->paginate(10);
        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uuid3 = Uuid::uuid4();

        $product = Product::create([
            'uuid' => $uuid3,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'merchant_id' => $request->merchant_id,
            'category_code' => $request->category_code,
        ]);

        return new ProductResource($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // check if product belong to category
        if ($request->category()->id !== $product->category_id) {
            return response()->json([
                'error' => 'Product does not belong to ' . $request->category()->id . ' category.'], 
                403
            );
        }

        // check if product belong to merchant
        if ($request->merchant()->id !== $product->merchant_id) {
            return response()->json([
                'error' => 'Product does not belong to ' . $request->merchant()->id . ' merchant.'], 
                403
            );
        }

        $product->edit($request->only([
            'name', 
            'price', 
            'description', 
            'category'
        ]));

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
