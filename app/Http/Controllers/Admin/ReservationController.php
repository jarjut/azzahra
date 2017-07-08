<?php

namespace Azzahra\Http\Controllers\Admin;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Azzahra\Models\Reservasi;

class ReservationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.reservation');
    }

    public function findReservation(Request $request){
      $reservasi = Reservasi::with(['pegawai','customer','service','bundle','jamreservasi'])->where('tanggal',$request->tanggal)->get();
      return response()->json($reservasi);
    }
}
