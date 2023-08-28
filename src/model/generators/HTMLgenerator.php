<?php

namespace DomPdf\model\generators;

use DomPdf\model\interface\GeneratorInterface;

class HTMLGenerator implements GeneratorInterface {
    public function generate($content, $filename) {
        file_put_contents($filename, $content);
    }
}