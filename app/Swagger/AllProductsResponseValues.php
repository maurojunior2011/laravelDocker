<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class AllProductsResponseValues {

    /**
     * @OA\Property(description="Id",title="Id",type="int")
     * @var int
     */
    private $id;

    /**
     * @OA\Property(description="Name",title="Name")
     * @var string
     */
    private $name;

    /**
     * @OA\Property(description="Price",title="Price")
     * @var string
     */
    private $price;

    /**
     * @OA\Property(description="Description",title="Description")
     * @var string
     */
    private $description;
}