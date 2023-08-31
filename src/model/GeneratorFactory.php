<?php

namespace DomPdf\model;

use DomPdf\model\generators\DOCXGenerator;
use DomPdf\model\generators\HTMLGenerator;
use DomPdf\model\generators\ODTGenerator;
use DomPdf\model\generators\PDFGenerator;

class GeneratorFactory {
    public static function createGenerator($format) {
        switch ($format) {
            case 'pdf':
                return new PDFGenerator();
            case 'docx':
                return new DOCXGenerator();
            case 'odt':
                return new ODTGenerator();
            case 'html':
                return new HTMLGenerator();
            default:
                throw new \InvalidArgumentException("Formato não suportado: $format");
        }
    }
}

?>
