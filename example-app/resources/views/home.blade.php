<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiFilm - Home</title>
</head>
<body>
    

</body>
</html>

@extends('layouts.master')

@section('title')
    halaman utama
@endsection

@section('content')
<h1>DigiFilm</h1>
<h2>Website yang menyediakan review film</h2>
<p>Belajar dan Berbagi review film agar hidup ini semakin santai berkualitas</p>

<h3>Benefit Join di DigiFilm</h3>
<ul>
    <li>Mendapatkan motivasi dari sesama pecinta film</li>
    <li>Sharing knowledge dari para penggemar film</li>
    <li>Dibuat oleh calon kritikus film terbaik</li>
</ul>

<h3>Cara Bergabung ke DigiFilm</h3>
<ol>
    <li>Mengunjungi Website ini</li>
    <li>Mendaftar di <a href="{{ route('register') }}">Form Sign Up</a></li>
    <li>Selesai!</li>
</ol>
@endsection