<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class AllSalesResponseValues {

    function __construct($products, $sale_id, $amount) {
        $this->products = $products;
        $this->sale_id = $sale_id;
        $this->amount = $amount;
    }

    /**
     * @OA\Property(description="Code",title="Code",type="array",@OA\Items(ref="#/components/schemas/AllProductsResponseValues"))
     * @var int
     */
    public $products;

    /**
     * @OA\Property(description="Sale ID",title="Sale Id",type="int")
     * @var int
     */
    public $sale_id;

    /**
     * @OA\Property(description="Amount",title="Amount",type="string")
     * @var int
     */
    public $amount;
}