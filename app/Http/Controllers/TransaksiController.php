<?php

namespace App\Http\Controllers;
use App\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi=Transaksi::where('status', 0)->get();
        return view('transaksi.index', compact('transaksi'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'qty'=>'required'
        ]);
        Transaksi::create($request->except('submit'));
        return redirect()->route('transaksi.index');
    }
    public function destroy(){
        $transaksi=Transaksi::findOrFail($id);
        if($transaksi){
            return redirect()->back();
        }
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
    public function laporan()
    {
        $pdf = app('Fpdf');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello Furqon!!!');
$pdf->output();
exit;

    }
}
