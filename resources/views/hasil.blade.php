@extends('layouts.main')

@section('content')
    <h2>Hasil Prediksi Mikroklimat</h2>
    <table>
        <tr><th>Lokasi Lahan</th><td>{{ $data->lokasi }}</td></tr>
        <tr><th>Nama Tanaman</th><td>{{ $data->nama_tanaman }}</td></tr>
        <tr><th>Suhu Udara</th><td>{{ $data->suhu_udara }} &deg;C</td></tr>
        <tr><th>Kelembapan Udara</th><td>{{ $data->kelembapan_udara }} %</td></tr>
        <tr><th>Kelembapan Tanah</th><td>{{ $data->kelembapan_tanah }} %</td></tr>
        <tr>
            <th>Status Mikroklimat</th>
            <td>
                @if($data->status_mikroklimat == 'Kering')
                    <span class="status-kering">Kering</span>
                @elseif($data->status_mikroklimat == 'Optimal')
                    <span class="status-optimal">Optimal</span>
                @else
                    <span class="status-lembap">Terlalu Lembap</span>
                @endif
            </td>
        </tr>
        <tr><th>Rekomendasi Perawatan</th><td><strong>{{ $rekomendasi }}</strong></td></tr>
    </table>
    <br>
    <a href="{{ route('prediksi') }}" class="btn">Input Kembali</a>
@endsection