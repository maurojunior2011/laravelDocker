<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use Illuminate\Http\JsonResponse;
use App\Swagger\AllProductsResponseValues;
use App\Swagger\AllSalesResponseValues;
use App\Swagger\AllSalesResponse;

class SaleController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"All Sales"},
     *     summary="Returns a list of sales",
     *     description="Returns a array of sales",
     *     path="/api/v1/allsales",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        @OA\JsonContent(ref="#/components/schemas/AllSalesResponse")
     *     ),
     * )
     */
    public function allSales() {

        $return = [];

        $list = Sale::with('products:id,price,name,description')->get(['sale_id']);
        foreach ($list as $item){

            $array = [];
            $total = 0;
            foreach($item->products as $prod) {
                $array[] = new AllProductsResponseValues($prod->id, $prod->name, $prod->price, $prod->description);
                $total += $prod->price;
            }

            $return[] = new AllSalesResponseValues($array, $item->sale_id, round($total, 2));
        }

        $response = new AllSalesResponse($return);

        return new JsonResponse($response, 200);        
    }

    /**
     * @OA\Get(
     *     tags={"Sale"},
     *     summary="Returns a sale",
     *     description="Returns a specified sale",
     *     path="/api/v1/sale/{id}",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sale Id",
     *         required=true,
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *        @OA\JsonContent(ref="#/components/schemas/AllSalesResponse")
     *     ),
     *      @OA\Response(
     *         response=404,
     *         description="not found"
     *     ),
     * )
     */
    public function sale(Sale $sale) {

        $return = [];

        $list = [$sale];
        foreach ($list as $item){

            $array = [];
            $total = 0;
            foreach($item->products as $prod) {
                $array[] = new AllProductsResponseValues($prod->id, $prod->name, $prod->price, $prod->description);
                $total += $prod->price;
            }

            $return[] = new AllSalesResponseValues($array, $item->sale_id, round($total, 2));
        }

        $response = new AllSalesResponse($return);

        return new JsonResponse($response, 200);        
    }
}
