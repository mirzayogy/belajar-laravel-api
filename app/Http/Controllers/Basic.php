<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basic extends Controller
{
  //
  function index(){
    return[
      "name" => "Mirza Yogy Kurniawan",
      "email" => "mirza.yogy@gmail.com"
    ];
  }
}
