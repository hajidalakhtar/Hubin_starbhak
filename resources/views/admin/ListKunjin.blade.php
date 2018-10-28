@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-body justify-content-center">

    <table class="table">
     <thead>
       <tr>
         <th scope="col">#</th>
         <th scope="col">Ketua Kelompok</th>
         <th scope="col">Perusahaan</th>
         <th scope="col">Nama Pembimbing</th>
         <th scope="col">Action</th>

       </tr>
     </thead>

     <tbody>
       @foreach ($ListKunjin as $data)
       <tr>
         <th scope="row">{{$data->id}}</th>
         <td>{{$data->nama_ketua}}</td>
         <td>{{$data->perusahaan}}</td>
         <td >{{$data->pembimbing}}</td>
         <td > <a href="{{route('Kunjin.DetailData',$data->id)}}" class="btn btn-info">More</a> <a href="{{route('Kunjin.Delete',$data->id)}}" class="btn btn-danger">Delete</a> <a href="{{route('Kunjin.edit',$data->id)}}" class="btn btn-primary">Edit</a> <a href="#" class="btn btn-danger">Downlaod PDF</a> </td>

       </tr>

     @endforeach
     </tbody>
   </table>
  </div>

</div>




@endsection
