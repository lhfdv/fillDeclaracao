<?php

namespace Classes;

if(!defined('ACCESSCHECK')) {
    die('Access not permitted');
}

use mikehaertl\pdftk\Pdf;

class GeneratePDF{
    public function generate($data){
        try{
            $filename = 'pdf_'.date('m-d-Y_hia_s').'.pdf';
            $pdf = new Pdf('./declaracao.pdf');
            $pdf->fillform($data)
            ->flatten()
            ->saveAs('./output/' . $filename);
            return $filename;
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
?>