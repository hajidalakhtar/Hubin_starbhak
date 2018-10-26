<?php

namespace App\Http\Controllers;
use App\ListKunjin;
use Illuminate\Http\Request;

class Kunjungan_Industri extends Controller
{
  public function ShowFormKunjin()
  {
      // return view('admin.AdminLogin');
      return view('kunjunganIndustri.Form_Kunjin');

  }

}
