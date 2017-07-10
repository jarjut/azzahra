<?php

namespace Azzahra\Http\Controllers\Admin;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Azzahra\Models\Bundle;
use Azzahra\Models\Category;
use Azzahra\Models\Pembayaran;
use Azzahra\Models\Service;

class PelayananController extends Controller
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
      $bundle     = Bundle::all();
      $category   = Category::all();

      $data = array(
        'bundle'    =>  $bundle,
        'category'  =>  $category
      );
        return view('admin.pelayanan')->with($data);
    }

    public function pelayananSubmit(Request $request)
    {
      Pembayaran::create([
          'kodeCabang'  => auth()->guard('admin')->user()->kodeCabang,
          'nama'        => $request->nama,
          'id_bundle'   => $request->bundle,
          'id_service'  => $request->service,
      ]);

      return redirect()->back();
    }


    public function findService(Request $request)
    {
      $service = Service::where('id_category',$request->id)->get();
      return response()->json($service);
    }

}
