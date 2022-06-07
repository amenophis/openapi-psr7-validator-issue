<?php

namespace Amenophis\Model;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(description="Person model")
 */
class Person
{
    /**
     * @OA\Property()
     */
    private int $id;

    /**
     * @OA\Property()
     */
    private string $firstname;

    /**
     * @OA\Property()
     */
    private string $lastname;
}