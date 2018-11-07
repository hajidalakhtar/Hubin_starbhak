@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>

                <div class="card-body">
                    @if  (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="{{route('ListKunjin')}}" class="btn btn-primary">List Kunjin</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftarkan Siswa</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
