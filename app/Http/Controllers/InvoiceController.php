<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Invoice'
        ];
        return view('invoice', $data);
    }

    public function print_invoice()
    {
        $data = [
            'title' => 'Cetak Invoice'
        ];

        $html = view('invoice-print', $data);
        $pdf = New Dompdf();
        $pdf->loadHtml($html);

        $pdf->setPaper('A4','potrait');
        $pdf->render();
        $pdf->stream();
    }
}
