<?php declare(strict_types=1);

namespace App\Template\Rendering;

interface TemplateRenderer {

    public function render(string $template, array $data = []): string;
}
