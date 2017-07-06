<?php

namespace Azzahra\Http\Controllers;

use Illuminate\Http\Request;
use Azzahra\Models\Cabang;
use Azzahra\Models\Pegawai;
use Azzahra\Models\Bundle;
use Azzahra\Models\Service;
use Azzahra\Models\Category;
use Azzahra\Models\Jamreservasi;

class ReservationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Load View
    public function index()
    {
      $cabang     = Cabang::all();
      $bundle     = Bundle::all();
      $category   = Category::all();

      $data = array(
        'cabang'    =>  $cabang,
        'bundle'    =>  $bundle,
        'category'  =>  $category
      );
        return view('reservation')->with($data);
    }

    /*
     *    Ajax Request
     */
    public function findPegawai(Request $request)
    {
      $pegawai = Pegawai::where('kodeCabang',$request->id)->get();
      return response()->json($pegawai);
    }

    public function findService(Request $request)
    {
      $service = Service::where('id_category',$request->id)->get();
      return response()->json($service);
    }


    public function findTime(Request $request)
    {

      $time = Jamreservasi::whereNotIn('id_jam',function($query) use($request){
        $query->select('id_jam')->from('reservasi')
        ->where('id_pegawai', $request->id_pegawai)
        ->where('kodeCabang', $request->kodeCabang)
        ->where('tanggal',$request->tanggal);
      })->get();

      return response()->json($time);
    }
    //
}
