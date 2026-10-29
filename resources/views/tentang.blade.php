@extends('layouts.main')

@section('content')
    <h2>Tentang Sistem AgroClima Garut</h2>
    <p>Tujuan: Membantu Kelompok Tani Makmur mengantisipasi perubahan kondisi lingkungan di sekitar tanaman berbasis Deep Learning (LSTM).</p>
    <h3>Lokasi Pemantauan:</h3>
    <ul>
        <li>Kecamatan Garut Kota</li>
        <li>Kecamatan Tarogong Kaler</li>
        <li>Kecamatan Samarang</li>
    </ul>
    <h3>Parameter Mikroklimat:</h3>
    <ul>
        <li>Suhu Udara (&deg;C)</li>
        <li>Kelembapan Udara (%)</li>
        <li>Kelembapan Tanah (%)</li>
    </ul>
@endsection