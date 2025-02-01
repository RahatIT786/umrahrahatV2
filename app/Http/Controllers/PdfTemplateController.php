<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfTemplateController extends Controller
{
    
    public function downloadItinerary(){
       


        // $pdf=Pdf::loadView('pdf_template.itinerary');
        $pdf=Pdf::loadView('pdf_template.flyer');
        return $pdf->download('umrahPackage.pdf');
    }
}
