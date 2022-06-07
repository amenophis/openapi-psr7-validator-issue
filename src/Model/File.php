<?php

namespace Amenophis\Model;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(description="File model")
 */
class File
{
    /**
     * @OA\Property()
     */
    private int $id;

    /**
     * @OA\Property()
     */
    private string $filename;
}