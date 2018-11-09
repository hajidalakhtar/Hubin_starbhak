<?php

namespace App\Http\Controllers;
use App\Perusahaan;
use App\ListKunjin;

use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth:perusahaan');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('home');
  }
  public function perusahaanhome($id)
  {
    $listkunjin = ListKunjin::where('perusahaan',$id)->first();
    // dd($listkunjin);
    return view('Perusahaan.home',['ListKunjin' => $listkunjin]);
  }


}
