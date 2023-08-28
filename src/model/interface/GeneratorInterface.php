<?php

namespace DomPdf\model\interface;

interface GeneratorInterface {
    public function generate($content, $filename);
}