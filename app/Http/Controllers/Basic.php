<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Programstudi;

class Basic extends Controller
{
  //
  function index(){
    return Programstudi::all();
  }
}
