<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agency;

class DatatableController extends Controller
{
  public function agencies(){
    $agencies = Agency::all();
    
    return datatables()->of($agencies)->toJson();
  }
}
