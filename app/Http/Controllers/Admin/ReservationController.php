<?php

namespace Azzahra\Http\Controllers\Admin;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Azzahra\Models\Reservasi;
use Azzahra\Models\Pembayaran;

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

    public function reservationConfirm($id){
      Reservasi::where('id_reservasi', $id)->update(['status' => 1]);
      $reservasi = Reservasi::find($id);

      Pembayaran::create([
          'kodeCabang'  => $reservasi->kodeCabang,
          'nama'        => $reservasi->customer->nama,
          'id_bundle'   => $reservasi->id_bundle,
          'id_service'  => $reservasi->id_service,
      ]);

      return redirect()->back();
    }

    //Ajax Request
    public function findReservation(Request $request){
      $reservasi = Reservasi::with(['pegawai','customer','service','bundle','jamreservasi'])
      ->where('tanggal',$request->tanggal)
      ->where('kodeCabang',auth()->guard('admin')->user()->kodeCabang)
      ->where('status', 0)
      ->get();
      return response()->json($reservasi);
    }
}
