<?php

namespace DomPdf\model\generators;

use DomPdf\model\interface\GeneratorInterface;

class ODTGenerator implements GeneratorInterface {
    public function generate($content, $filename) {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $section->addText($content);

        $writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'ODText');
        $writer->save($filename);
    }
}