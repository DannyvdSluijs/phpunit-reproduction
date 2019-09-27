<?php declare(strict_types=1);

namespace Reproduction\Test;

use PHPUnit\Framework\TestCase;
use Reproduction\Example;
use Symfony\Component\HttpFoundation\Request;

class ExampleTest extends TestCase
{
    /**
     * @covers \Reproduction\Example
     */
    public function testIsMissingWithoutAuthorizationHeader(): void
    {
        $example = new Example();
        $request = new Request();

        self::assertTrue($example->main($request));
    }

    /**
     * @covers \Reproduction\Example
     */
    public function testIsMissingWithAuthorizationHeader(): void
    {
        $example = new Example();
        $request = new Request();
        $request->headers->set('Authorization', 'Basic YWxhZGRpbjpvcGVuc2VzYW1l');

        self::assertFalse($example->main($request));
    }
}
