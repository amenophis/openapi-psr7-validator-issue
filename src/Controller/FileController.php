<?php

namespace Amenophis\Controller;

use OpenApi\Annotations as OA;

class FileController
{
    /**
     * @OA\Get(
     *     path="/api/file",
     *     @OA\Response(
     *         response="200",
     *         description="File or file with Info resource",
     *         @OA\JsonContent(
     *             oneOf={
     *                 @OA\Schema(ref="#/components/schemas/File"),
     *                 @OA\Schema(ref="#/components/schemas/FileWithInfo")
     *             }
     *         )
     *     )
     * )
     */
    public function getFile(): void
    {

    }
}