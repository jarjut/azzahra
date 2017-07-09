<?php

namespace Azzahra\Http\Controllers\Master;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Azzahra\Admin;
use Azzahra\Models\Cabang;
use Azzahra\Models\Pegawai;

class PegawaiController extends Controller
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
        return view('master.pegawai');
    }

    /**
     * Register Pegawai
     */
    public function showRegisterPegawai(){
      $data = array(
        'cabang'    =>  Cabang::all()
      );

        return view('master.registerPegawai')->with($data);
    }

    public function registerPegawai(Request $request){
      Validator::make($request->all(), [
          'nama'          => 'required|string|max:255',
          'nip'           => 'required|string||max:255|unique:pegawai',
      ])->validate();

      Pegawai::create([
          'kodeCabang'   => $request->cabang,
          'nama'         => $request->nama,
          'nip'          => $request->nip,
      ]);

      return redirect()->route('master.pegawai');
    }



    /**
     * Register Admin
     */
    public function showRegisterAdmin(){
      $data = array(
        'cabang'    =>  Cabang::all()
      );

        return view('master.registerAdmin')->with($data);
    }

    public function registerAdmin(Request $request){
      Validator::make($request->all(), [
          'nama'          => 'required|string|max:255',
          'nip'           => 'required|string||max:255|unique:admins',
          'password'      => 'required|string|min:6|confirmed',
      ])->validate();

      Admin::create([
          'kodeCabang'   => $request->cabang,
          'nama'         => $request->nama,
          'nip'          => $request->nip,
          'password'     => bcrypt($request->password),
      ]);

      return redirect()->route('master.pegawai');
    }
}
