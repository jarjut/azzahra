<?php

namespace Azzahra\Http\Controllers\Admin;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Azzahra\Models\Pembayaran;

class PembayaranController extends Controller
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
      $pembayaran = Pembayaran::where('status',0)
      ->where('kodeCabang',auth()->guard('admin')->user()->kodeCabang)
      ->get();
        return view('admin.pembayaran')->with('pembayaran',$pembayaran);
    }

    public function showConfirmForm($id){
      $pembayaran = Pembayaran::find($id);
      return view('admin.pembayaranConfirm')->with('pembayaran',$pembayaran);
    }

    public function pembayaranConfirm($id){
      Pembayaran::where('id_pembayaran', $id)->update(['status' => 1, 'tanggal' => Carbon::now(7)]);
      return redirect()->route('admin.pembayaran');
    }
}
