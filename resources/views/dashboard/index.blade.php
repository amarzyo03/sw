@extends('templates')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <h6 class="my-0">DASHBOARD</h6>
        </div>
        <div class="card-body">
            Selamat datang di halaman dashboard. <span class="text-primary">{{ $admin->name }}</span>
        </div>
    </div>
@endsection
