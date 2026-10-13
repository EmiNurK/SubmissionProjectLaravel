@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1>Profil Mahasiswa</h1>

    <p><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</p>
    <p><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</p>
    <p><strong>Jurusan:</strong> {{ $mahasiswa['jurusan'] }}</p>
    <p><strong>Universitas:</strong> {{ $mahasiswa['universitas'] }}</p>
@endsection