<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema()
 */
class AllSalesResponse {

    function __construct($values, $success = true, $message = "Sucesso!", $error = false, $errormessages = [], $warning = false, $warningmessages = []) {
        $this->values = $values;
        $this->success = $success;
        $this->message = $message;
        $this->error = $error;
        $this->errormessages = $errormessages;
        $this->warning = $warning;
        $this->warningmessages = $warningmessages;
    }

    /**
     * @OA\Property(description="Code",title="Code",type="array",@OA\Items(ref="#/components/schemas/AllSalesResponseValues"))
     * @var int
     */
    public $values;

    /**
     * @OA\Property(description="Success",title="Success",type="boolean")
     * @var string
     */
    public $success;

    /**
     * @OA\Property(description="Message",title="Message")
     * @var string
     */
    public $message;

    /**
     * @OA\Property(description="Error",title="Error",type="boolean")
     * @var string
     */
    public $error;

    /**
     * @OA\Property(description="Error Messages",title="Error messages",type="array",@OA\Items(type="string", format="id"))
     * @var string
     */
    public $errormessages;

    /**
     * @OA\Property(description="Warning",title="Warning",type="boolean")
     * @var string
     */
    public $warning;

    /**
     * @OA\Property(description="Warning Messages",title="Warning Messages",type="array",@OA\Items(type="string", format="id"))
     * @var string
     */
    public $warningmessages;
}