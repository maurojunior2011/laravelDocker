<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class AllProductsResponse {

    /**
     * @OA\Property(description="Code",title="Code",type="array",@OA\Items(ref="#/components/schemas/AllProductsResponseValues"))
     * @var int
     */
    private $values;

    /**
     * @OA\Property(description="Success",title="Success",type="boolean")
     * @var string
     */
    private $success;

    /**
     * @OA\Property(description="Message",title="Message")
     * @var string
     */
    private $message;

    /**
     * @OA\Property(description="Error",title="Error",type="boolean")
     * @var string
     */
    private $error;

    /**
     * @OA\Property(description="Error Messages",title="Error messages",type="array",@OA\Items(type="string", format="id"))
     * @var string
     */
    private $errormessages;

    /**
     * @OA\Property(description="Warning",title="Warning",type="boolean")
     * @var string
     */
    private $warning;

    /**
     * @OA\Property(description="Warning Messages",title="Warning Messages",type="array",@OA\Items(type="string", format="id"))
     * @var string
     */
    private $warningmessages;
}