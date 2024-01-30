<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\JsonResponse;
use App\Swagger\AllProductsResponse;
use App\Swagger\AllProductsResponseValues;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"All Products"},
     *     summary="Returns a list of products",
     *     description="Returns a array of products",
     *     path="/api/v1/allproducts",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        @OA\JsonContent(ref="#/components/schemas/AllProductsResponse")
     *     ),
     * )
     */
    public function allProducts() {

        $array = [];
        
        $list = Product::get(['id','name','price', 'description']);
        foreach ($list as $item){
            $array[] = new AllProductsResponseValues($item->id, $item->name, $item->price, $item->description);
        }

        $response = new AllProductsResponse($array);

        return new JsonResponse($response, 200);        
    }
}
