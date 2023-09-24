<?php declare(strict_types=1);
namespace App\Homepage\Controller;

use App\Template\Rendering\TemplateRenderer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final readonly class IndexController {

    public function __construct(TemplateRenderer $templateRenderer) {}

    public function show(Request $request): Response {
        $content = 'Welcome to the Postcode Checker by Josh Callarman';
        
        return new Response($content);
    }
}
