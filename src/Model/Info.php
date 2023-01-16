<?php

namespace Amenophis\Model;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(description="Info model", required={"canBeOpened"})
 */
class Info
{
    /**
     * @OA\Property()
     */
    private bool $canBeOpened;
}