<?php

namespace App\Http\Controllers;
use App\ListKunjin;
use App\User;
use Illuminate\Http\Request;

class Kunjungan_Industri extends Controller
{
  public function ShowFormKunjin()
  {
      // return view('admin.AdminLogin');
      $User = User::all();
      return view('kunjunganIndustri.Form_Kunjin',['user' => $User]);

  }
  public function getdata()
{
  $listkunjin = ListKunjin::all();
  return $listkunjin;
}
public function read()
{
  $listkunjin = ListKunjin::all();
  return view('admin.ListKunjin',['ListKunjin' => $listkunjin]);
}
public function add()
{
return view('addkunjin');

}
public function prosesadd(Request $request)
{
$listkunjin = new ListKunjin;
$listkunjin->nama_ketua = $request->KetuaKelompok;
$listkunjin->anggota_1 = $request->anggota_1;
$listkunjin->anggota_2 = $request->anggota_2;
$listkunjin->anggota_3 = $request->anggota_3;
$listkunjin->anggota_4 = $request->anggota_4;
$listkunjin->anggota_5 = $request->anggota_5;
$listkunjin->anggota_6 = $request->anggota_6;
$listkunjin->anggota_7 = $request->anggota_7;
$listkunjin->anggota_8 = $request->anggota_8;
$listkunjin->anggota_9 = $request->anggota_9;
$listkunjin->anggota_10 = $request->anggota_10;
$listkunjin->anggota_11 = $request->anggota_11;
$listkunjin->anggota_12 = $request->anggota_12;
$listkunjin->anggota_13 = $request->anggota_13;
$listkunjin->perusahaan = $request->perusahaan;
$listkunjin->alamat_perusahaan = $request->alamat_perusahaan;
$listkunjin->tanggal_keberangkatan = $request->tanggal_keberangkatan;
// $image = $request->image->store('public/place');
// $listkunjin->image_path = basename($image);
$listkunjin->ssemail = "tes.png";
$listkunjin->pembimbing = $request->pembimbing;
$listkunjin->save();
return redirect()->route('Kunjin.AddStatusUser',$request->id_user);
}
public function AddStatusUser($id)
{
  $user = User::find($id);
  // dd($user);
  $user->status = "Sudah Mengisi Form";
  $user->save();
  return redirect('/home');
}
public function delete($id)
{

  $listkunjin = ListKunjin::find($id);
  // dd($listkunjin);
  $listkunjin->delete();
  return redirect('/admin/list-kunjin');

}
public function edit($id)
{
$listkunjin = ListKunjin::find($id);
dd($listkunjin);
return view('kunjunganIndustri.Form_Edit_Kunjin',['ListKunjin' => $listkunjin]);
}
public function update(Request $request)
{
  $listkunjin = place::find($request->id);
  $listkunjin->name = $request->name;
  $listkunjin->latitude = $request->latitude;
  $listkunjin->longitude = $request->longitude;
  $listkunjin->x = $request->x;
  $listkunjin->y = $request->y;
  $listkunjin->description = $request->description;
  $listkunjin->save();
  return redirect('/place');
}
// public function DetailData($id)
// {
//   $listkunjin = ListKunjin::find($id);
// }
public function DetailData($id)
{
  $listkunjin = ListKunjin::find($id);
  // dd($listkunjin);
  return view('admin.ListKunjin',['ListKunjin' => $listkunjin]);
}


}
