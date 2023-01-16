<?php

namespace Amenophis\Model;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(description="FileWithInfo model", required={"info", "file"})
 */
class FileWithInfo
{
    /**
     * @OA\Property()
     */
    private Info $info;

    /**
     * @OA\Property()
     */
    private File $file;
}