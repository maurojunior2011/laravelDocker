<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class NewSaleRequest {

    /**
     * @OA\Property(description="ids",title="ids",type="array",@OA\Items(type="integer"))
     * @var int
     */
    public $products;
}