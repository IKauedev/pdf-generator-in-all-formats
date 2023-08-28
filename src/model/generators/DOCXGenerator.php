<?php

namespace DomPdf\model\generators;

use DomPdf\model\interface\GeneratorInterface;

class DOCXGenerator implements GeneratorInterface {
    public function generate($content, $filename) {
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->addSection();
        $section->addText($content);

        $writer = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $writer->save($filename);
    }
}