<?php

namespace Azzahra\Http\Controllers\Admin;

use Azzahra\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('admin.pembayaran');
    }
}
