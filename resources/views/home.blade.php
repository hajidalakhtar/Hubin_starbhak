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
                <h1>Hello {{Auth::user()->name}}</h1>
                @if (Auth::user()->status == "Sudah Mengisi Form")
                  <h1>Setatus anda adalah {{Auth::user()->status}}</h1>
                @else
              <a href="{{route('form_kunjin')}}" class="btn btn-primary">Daftar Kunjin</a>
            @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
