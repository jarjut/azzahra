<?php

namespace Azzahra\Http\Controllers\Master;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Azzahra\Models\Category;
use Azzahra\Models\Service;
use Azzahra\Models\Bundle;
use Azzahra\Models\BundleDetail;

class ServiceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:master');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.service');
    }

    /**
     * Menambah Layanan
     */
    public function addServiceShow(){
      $category = category::all();
      return view('master.addService')->with('category',$category);
    }

    public function addService(Request $request){
      Validator::make($request->all(), [
          'nama'          => 'required|string|max:255',
          'harga'           => 'required|string||max:255'
      ])->validate();

      Service::create([
        'id_category' => $request->category,
        'nama'        => $request->nama,
        'harga'       => $request->harga
      ]);

      return redirect()->route('master.service');
    }

    /**
     * Menambah Paket
     */
     public function addBundleShow(){
       return view('master.addBundle');
     }
     public function addBundle(Request $request){
       Validator::make($request->all(), [
           'nama'          => 'required|string|max:255',
           'harga'           => 'required|string||max:255'
       ])->validate();

       $bundle = Bundle::create([
         'nama'        => $request->nama,
         'harga'       => $request->harga
       ]);
        return redirect()->route('master.addBundleService',['id' => $bundle->id_bundle]);
     }

     public function addBundleServiceShow($id){
       $data = array(
         'bundle'  => Bundle::find($id),
         'service' => Service::all()
       );
       return view('master.addBundleService')->with($data);
     }

     public function addBundleService(Request $request){
       BundleDetail::create([
         'id_bundle'  => $request->bundle,
         'id_service' => $request->service,
       ]);
       return redirect()->back();
     }
}
