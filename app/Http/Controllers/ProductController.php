<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\JsonResponse;

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
        $errormessages = []; //to possible validation
        $warningmessages = []; //to possible validation
        $error = false; //to possible validation
        $warning = false; //to possible validation
        $values = Product::get(['id','name','price', 'description']);

        return new JsonResponse([
            'values' => $values,
            'success' => ($error) ? false : true,
            'message' => $error ? 'Erro ao buscar os dados!' : ($warning ? 'Sucesso com avisos!' : 'Sucesso!'),
            'errors' => count($errormessages),
            'errormessages' => $errormessages,
            'warnings' => count($warningmessages),
            'warningmessages' => $warningmessages
        ], $error ? 400 : 200);        
    }
}
