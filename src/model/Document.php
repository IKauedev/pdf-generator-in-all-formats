<?php

use DomPdf\model\GeneratorFactory;

class Document {
    private $generator;

    public function __construct($format) {
        $this->generator = GeneratorFactory::createGenerator($format);
    }

    public function generateDocument($content, $filename) {
        $this->generator->generate($content, $filename);
    }
}