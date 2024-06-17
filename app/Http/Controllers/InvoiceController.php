<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $src = public_path('images/grombyang.png');

        // Pastikan gambar ada dan dapat diakses
        if (file_exists($src)) {
            // Buat variabel $image dengan data gambar dalam format Base64
            $image = 'data:' . mime_content_type($src) . ';base64,' . base64_encode(file_get_contents($src));
        } else {
            $image = null; // Atur nilai default jika gambar tidak ditemukan
        }

        return view('print.welcome', compact('image'));
    }

    public function print_invoice()
    {
        $src = public_path('images/grombyang.png');

        // Pastikan gambar ada dan dapat diakses
        if (file_exists($src)) {
            // Buat variabel $image dengan data gambar dalam format Base64
            $image = 'data:' . mime_content_type($src) . ';base64,' . base64_encode(file_get_contents($src));
        } else {
            $image = null; // Atur nilai default jika gambar tidak ditemukan
        }

        // Loloskan variabel $image ke view
        $pdf = Pdf::loadView('print.pdf-print', compact('image'))->setOption(['defaultFont' => 'sans-serif'])->setPaper('c4','potrait');

        // Unduh PDF dengan nama 'document.pdf'
        return $pdf->stream('invoice-grombyang.pdf');
    }
}
