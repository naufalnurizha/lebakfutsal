<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;

use App\Http\Requests;
use App\Model\Booking;

class laporancontroller extends Controller
{	
public function destroy($id)
    {
    	$Bookings = Booking::find($id);
        $Bookings -> delete();
        return redirect('laporan');
    }

    public function index()
    {
    	$Bookings = Booking::all();
    	return view('Laporan.laporan', ["carts" => $Bookings]);
    }



     public function fun_pdf(Request $request)
     {	
        $tanggal_mulai = date_format(date_create($request->mulai), 'd/m/Y');
        $tanggal_akhir = date_format(date_create($request->akhir), 'd/m/Y');
            
        if($request->mulai && $request->akhir){
          $Bookings= Booking::whereBetween('tanggal', [$request->mulai, $request->akhir])->get();
          
        }else{
                $Bookings = Booking::all();
        }
        
    	$pdf = PDF::loadView('Laporan.printable', ['mulai'=> $request->mulai,'akhir'=> $request->akhir, 'carts' => $Bookings]);
    	return $pdf->download('laporan.pdf');
	 }
}
