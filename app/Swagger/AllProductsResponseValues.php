<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class AllProductsResponseValues {

    function __construct($id, $name, $price, $description) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    /**
     * @OA\Property(description="Id",title="Id",type="int")
     * @var int
     */
    public $id;

    /**
     * @OA\Property(description="Name",title="Name")
     * @var string
     */
    public $name;

    /**
     * @OA\Property(description="Price",title="Price")
     * @var string
     */
    public $price;

    /**
     * @OA\Property(description="Description",title="Description")
     * @var string
     */
    public $description;
}