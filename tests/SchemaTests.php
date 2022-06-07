<?php

namespace Amenophis\Tests;

use League\OpenAPIValidation\PSR7\Exception\ValidationFailed;
use League\OpenAPIValidation\PSR7\OperationAddress;
use League\OpenAPIValidation\PSR7\ResponseValidator;
use League\OpenAPIValidation\PSR7\ValidatorBuilder;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\TestCase;

class SchemaTests extends TestCase
{
    public function testFile(): void
    {
        $this->expectNotToPerformAssertions();
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode([
            'id' => 1,
            'filename' => 'test.txt',
        ]));

        $this->getOpenAPIResponseValidator()->validate(new OperationAddress('/api/file', 'get'), $response);
    }

    public function testFileWithInfo(): void
    {
        $this->expectNotToPerformAssertions();
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode([
            'info' => [
                'canBeOpened' => false,
            ],
            'file' => [
                'id' => 1,
                'filename' => 'test.txt',
            ]
        ]));

        $this->getOpenAPIResponseValidator()->validate(new OperationAddress('/api/file', 'get'), $response);
    }

    public function testBadSchema(): void
    {
        $this->expectException(ValidationFailed::class);
        $response = new Response(200, ['Content-Type' => 'application/json'], json_encode([
            'firstname' => 'Jérémy',
            'lastname' => 'Leherpeur',
        ]));

        $this->getOpenAPIResponseValidator()->validate(new OperationAddress('/api/file', 'get'), $response);
    }

    protected function getOpenAPIResponseValidator(): ResponseValidator
    {
        return (new ValidatorBuilder())
            ->fromYamlFile(__DIR__.'/../openapi.yaml')
            ->getResponseValidator();
    }
}