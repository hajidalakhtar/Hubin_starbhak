@extends('layouts.app')

@section('content')
      <div class="row justify-content-center">

                      @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                      @endif
                      <div class="container">
                          <h1>tambah</h1>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="card">
                                      <div class="card-body">
                                          <form action="" method='post' enctype='multipart/form-data'>
                                              @csrf
                                              <div class="form-grup">
                                                  <label>Ketua Kelompok</label>
                                                  <input type="text" name="KetuaKelompok" value="" class="form-control">
                                                  <label>Angota</label>

                                                  <input type="text" name="name2" value="" class="form-control">
                                                  <input type="text" name="name3" value="" class="form-control">
                                                  <input type="text" name="name4" value="" class="form-control">
                                                  <input type="text" name="name5" value="" class="form-control">
                                                  <input type="text" name="name6" value="" class="form-control">
                                                  <input type="text" name="name7" value="" class="form-control">
                                                  <input type="text" name="name8" value="" class="form-control">
                                                  <input type="text" name="name9" value="" class="form-control">
                                                  <input type="text" name="name10" value="" class="form-control">
                                                  <input type="text" name="name11" value="" class="form-control">

                                              </div>

                                              <div class="form-grup">
                                                  <label>Perusahaan</label>
                                                  <input type="text" name="perusahaan" value="" class="form-control">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Alamat Perusahaan</label>
                                                  <input type="text" name="Alamat Perusahaan" value="" class="form-control">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Tanggal Keberangkatan</label>
                                                  <input type="date" name="x" value="" class="form-control">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Y</label>
                                                  <input type="text" name="y" value="" class="form-control">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Image</label>
                                                  <input type="file" name="image" class="form-control">
                                              </div>
                                              <div class="form-grup">
                                                  <label>Description</label>
                                                  <input type="text" name="description" value="" class="form-control">
                                              </div>


                                              <br>
                                              <button type="submit" class="btn btn-primary">simpan</button>
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
