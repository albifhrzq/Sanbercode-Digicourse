@extends('layouts.master')

@section('title')
    halaman utama
@endsection

@section('content')
    <h1>SELAMAT DATANG!</h1>
    <p>Terima kasih sudah bergabung di Sanbercode.</p>

    @if(isset($data))
        <h2>Halo, {{ $data['first_name'] }} {{ $data['last_name'] }}!</h2>
    @endif
@endsection
