<?php declare(strict_types=1);

namespace Reproduction;

use Symfony\Component\HttpFoundation\Request;

class Example
{
    public function main(Request $request): bool
    {
        return $this->isMissingAuthorizationHeader($request);
    }

    private function isMissingAuthorizationHeader(Request $request): bool
    {
        if ($request->headers->has('Authorization')) {
            return false;
        }

        return true;
    }
}