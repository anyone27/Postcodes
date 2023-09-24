<?php declare(strict_types=1);

namespace App\Template\Rendering;

use Twig_Environment;

final class TwigTemplateRenderer implements TemplateRenderer {

    public function __construct(Twig_Environment $twigEnvironment) {}
    
    public function render(string $templace, array $data = []): string {
        return $this->$twigEnvironment->render($templace, $data);
    }
}