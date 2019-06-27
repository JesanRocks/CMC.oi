<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use App\Inventario;

class pdfController extends Controller
{
    public function pdf()
    {
        $inventarios = Inventario::all();
        $pdf = PDF::loadView('documents.pdf',compact('inventarios'))
        ->setPaper('letter','portrait');
        return $pdf->stream();
    }

    public function descarga()
    {
        $inventarios = Inventario::all();
        $pdf = PDF::loadView('documents.pdf',compact('inventarios'))
        ->setPaper('letter','portrait');
        return $pdf->download();
    }
}
