<?php

namespace Azzahra\Http\Controllers;

use Illuminate\Http\Request;
use Azzahra\Models\Bundle;

class BundleController extends Controller
{
    //
    public function index()
    {
      $bundle = Bundle::all();

      $data = array(
        'bundle'  => $bundle
      );
        return view('bundle')->with($data);
    }
}
