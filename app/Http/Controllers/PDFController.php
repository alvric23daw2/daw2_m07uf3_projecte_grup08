<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Vols;
use App\Models\Reserva;
use App\Models\User;
use PDF;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generateUnicVolsPDF($Codi_vol)
    {
        $dades_vols = Vols::where('Codi_vol', $Codi_vol)->firstOrFail(); 
        $pdf = PDF::loadView('volsPDF', compact('dades_vols'))->setPaper('a4', 'landscape');
        return $pdf->stream("llista_{$Codi_vol}.pdf");
    }

    public function generateUnicClientPDF($Passaport_client)
    {
        $dades_clients = Client::where('Passaport_client', $Passaport_client)->firstOrFail();
        $pdf = PDF::loadView('pdfView', compact('dades_clients'))->setPaper('a4', 'landscape');
        return $pdf->stream("client_{$Passaport_client}.pdf");
    }

    public function generateUnicReservaPDF($Passaport_client, $Codi_vol)
    {
        $dades_reserva = Reserva::where('Passaport_client', $Passaport_client)->firstOrFail();
        $pdf = PDF::loadView('reservaPDF', compact('dades_reserva'))->setPaper('a4', 'landscape');
        return $pdf->stream("reserva_{$Passaport_client}_{$Codi_vol}.pdf");
    }

    public function generateUnicUserPDF($id)
    {
        $dades_user = User::where('id', $id)->firstOrFail();
        $pdf = PDF::loadView('usersPDF', compact('dades_user'))->setPaper('a4', 'landscape');
        return $pdf->stream("client_{$id}.pdf");
    }
}