<?php declare(strict_types=1);
namespace App\PostcodeChecker\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final readonly class PostcodeCheckerController {

    public function show(Request $request): Response {
        $content = 'Post code form';

        return new Response($content);
    }
}
