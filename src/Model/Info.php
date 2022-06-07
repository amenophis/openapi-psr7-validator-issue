<?php

namespace Amenophis\Model;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(description="Info model")
 */
class Info
{
    /**
     * @OA\Property()
     */
    private bool $canBeOpened;
}