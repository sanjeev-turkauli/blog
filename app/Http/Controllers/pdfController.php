<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class pdfController extends Controller
{
    public function convert(){
        $data = [
            "name" => 'Sanjeev Kumar',
        ];
    
        $pdf = PDF::loadView('arabic_view', $data);
        $pdf->getDomPDF()->set_option("isHtml5ParserEnabled", true);
        $pdf->getDomPDF()->set_option("isPhpEnabled", true);
        return $pdf->download('arabic_document.pdf');
    }
}
