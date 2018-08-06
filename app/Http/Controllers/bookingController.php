<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Booking;
use Calendar;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifemail;

use Illuminate\Support\Facades\Auth;
class bookingcontroller extends Controller
{
    public function index()
    {	
    	$bookings = booking::all();
        	$bookings_list = [];
    	foreach ($bookings as $booking) {
    		$waktu = date_format(date_create($booking->tanggal), "Y-m-d")."T" .date_format(date_create($booking->tanggal), "Hi");
            $time = date('H:i', strtotime(date_format(date_create($booking->tanggal), "Hi")));
            $time = date('Hi', strtotime('+' . $booking->jam.  'hour', strtotime($time)));
    		$waktu1 =  date_format(date_create($booking->tanggal), "Y-m-d")."T" . $time;

    		$bookings_list[] = Calendar::event(
    			$booking->namatim,
    			false,
	    		$waktu, 
	    		$waktu1,
	    		0
	    	);
    	}

    	$calendar_details = Calendar::addEvents($bookings_list, ['color' => '#337ab7']);


    	return view('booking', compact('calendar_details') );
    		// return view('booking');

		}

    	public function addEvent(Request $request)
    	{
    		$validator = validator::make($request->all(), [
    			'namatim' => 'required',
    			'tanggal' => 'required',
    			'jam' => 'required',
                'harga' => 'required'
    		]);

    	// if ($validator->fails()) {
    	// 	session::flash('warning','please enter the valid details');
    	// 	return Redirect::to('/booking')->withInput()->withErrors($validator);
    	// }
        //get minutes
        $waktunya = Carbon::parse($request['tanggal']);
        $minutes = date('i', strtotime($request['tanggal']));
        //kalo lebih 30 di tambah jam dan menit nya di 00 in
        if ($minutes > 30) {
            $waktunya->addHour();
            $waktunya->subMinute($minutes);
        } else {
            //di kurangin ama menit nya biar jadi 00
            $waktunya->subMinute($minutes);
        }
        //ngecek kalo ada yang double :
        $pesanan = booking::all();
        //cek bookingan yang telah dibooking orang 
        foreach ($pesanan as $pesannya) {
            //cek kalo ada pesanan di jam itu...
            if ($waktunya == $pesannya->tanggal) {
               return redirect('booking')->with('error', 'Gagal Booking silahkan mencari tanggal atau jam yang lain!');
            }
            //cek kalo pesanan tersebut berdasarkan durasi
            for ($i=0; $i <= $pesannya->jam; $i++) {
            $tanggal_cek = Carbon::parse($pesannya->tanggal); 
                if ($waktunya == $tanggal_cek->addHour($i-1)) {
                     return redirect('booking')->with('error', 'Gagal Booking silahkan mencari tanggal atau jam yang lain!');
                }
                
            }
        }
            $event = new Booking;
            $event->namatim = $request['namatim'];
            $event->user_id =  Auth::user()->id;
            $event->tanggal = $waktunya;
            $event->jam = $request['jam'];
            $event->harga = $request['harga'] * $request['jam'];
            $event->save();

            if ($event){
            Mail::to($event->user->email)->send(new verifemail($event));
            }
            return redirect('booking')->with('succes', 'berhasil booking silhkan cek email');
        //     // \session::flash('succes','event berhasil ditambah');
        //     return Redirect('/booking');

    	// return view('booking', compact('calendar') );
    	// // echo $waktu;
    	
     //    return view('booking');
    }
}
