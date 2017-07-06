<?php

namespace Azzahra\Http\Controllers;

use Illuminate\Http\Request;
use Azzahra\Models\Category;

class ServiceController extends Controller
{
    //
    public function index()
    {
      $category = Category::all();

      $data = array(
        'category'  => $category
      );
      return view('service')->with($data);
    }
}
