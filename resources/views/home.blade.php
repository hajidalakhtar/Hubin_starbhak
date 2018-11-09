@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--  --}}
                <h1>Hello {{Auth::user()->name}} </h1>
                @if (Auth::user()->status == "Siap Berangkat")
                  <h1>Setatus anda adalah {{$user->Status()}}</h1>
                  <h1>anda akan kunjin ke {{$user->NamaPerusahaan()}} </h1>

                @else
                  @if (Auth::user()->kelas == "kelas 10")
                    <a href="{{route('form_kunjin', Auth::user()->id)}}" class="btn btn-primary">Daftar Kunjin</a>
                  @else
                    <a href="{{route('form_kunjin', Auth::user()->id)}}" class="btn btn-primary">Daftar Magang</a>
                  @endif

            @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
