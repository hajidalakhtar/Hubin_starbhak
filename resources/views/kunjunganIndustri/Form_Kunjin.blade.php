@extends('layouts.app')

@section('content')
      <div class="row justify-content-center">

                      @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                      @endif
                      <div class="container">
                          <h1 class="text-center mb-5">Form Kunjungan Industri</h1>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="card">
                                      <div class="card-body">
                                        <a href="{{Route('home')}}" class="btn btn-primary mb-5">Kembali</a>
                                        <h1></h1>
                                          <form action="{{Route('Kunjin.ProsesAdd')}}" method='post' enctype='multipart/form-data'>
                                              @csrf
                                              <div class="form-grup">
                                                  <label>Ketua Kelompok</label>
                                                  <input type="text" name="KetuaKelompok" value="" class="form-control">
                                                  <label>Angota</label>
                                                  @foreach ($user as $data )
                                                    <input type="hidden" name="id_user" value="{{$data['id']}}">
                                                  @endforeach

                                                  <input type="text" name="anggota_1" value="" class="form-control" placeholder="Nama Anggota 1">
                                                  <input type="text" name="anggota_2" value="" class="form-control" placeholder="Nama Anggota 2">
                                                  <input type="text" name="anggota_3" value="" class="form-control" placeholder="Nama Anggota 3">
                                                  <input type="text" name="anggota_4" value="" class="form-control" placeholder="Nama Anggota 4">
                                                  <input type="text" name="anggota_5" value="" class="form-control" placeholder="Nama Anggota 5">
                                                  <input type="text" name="anggota_6" value="" class="form-control" placeholder="Nama Anggota 6">
                                                  <input type="text" name="anggota_7" value="" class="form-control" placeholder="Nama Anggota 7">
                                                  <input type="text" name="anggota_8" value="" class="form-control" placeholder="Nama Anggota 8">
                                                  <input type="text" name="anggota_9" value="" class="form-control" placeholder="Nama Anggota 9">
                                                  <input type="text" name="anggota_10" value="" class="form-control" placeholder="Nama Anggota 10">
                                                  <input type="text" name="anggota_11" value="" class="form-control" placeholder="Nama Anggota 11">
                                                  <input type="text" name="anggota_12" value="" class="form-control" placeholder="Nama Anggota 12">
                                                  <input type="text" name="anggota_13" value="" class="form-control" placeholder="Nama Anggota 13">

                                              </div>

                                              <div class="form-grup">
                                                  <label>Nama Perusahaan</label>
                                                  <input type="text" name="perusahaan" value="" class="form-control" placeholder="Nama Perusahaan">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Alamat Perusahaan</label>
                                                  <input type="text" name="alamat_perusahaan" value="" class="form-control" placeholder="Alamat Perusahaan ">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Tanggal Keberangkatan</label>
                                                  <input type="date" name="tanggal_keberangkatan" value="" class="form-control">
                                              </div>

                                              <div class="form-grup">
                                                  <label>Screenshot Email Persetujuan Perusahaan</label>
                                                  <input type="file" name="ssemail" class="form-control">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Pembimbing</label>
                                                  <input type="text" name="pembimbing" value="" class="form-control" placeholder="Masukan Guru Pembimbing">
                                              </div>


                                              <br>
                                              <button type="submit" class="btn btn-primary">Submit</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      {{-- akhir form --}}
                  </div>
              </div>
          </div>
      </div>
@endsection
