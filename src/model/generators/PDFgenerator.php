<?php

namespace DomPdf\model\generators;

use DomPdf\model\interface\GeneratorInterface;

class PDFGenerator implements GeneratorInterface {
    public function generate($content, $filename) {
        $pdf = new \TCPDF('P', 'mm', 'A4', true, 'UTF-8');
        $pdf->SetCreator('PDF Generator');
        $pdf->SetTitle('Generated PDF');

        $pdf->AddPage();
        $pdf->SetFont('dejavusans', '', 12);
        $pdf->Write(10, $content);

        $pdf->Output($filename, 'F');
    }
}