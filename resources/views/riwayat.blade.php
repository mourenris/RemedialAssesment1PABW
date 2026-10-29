@extends('layouts.main')

@section('content')
    <h2>Riwayat Prediksi Mikroklimat</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Waktu Input</th>
                <th>Lokasi</th>
                <th>Tanaman</th>
                <th>Suhu (&deg;C)</th>
                <th>Kelembapan Udara (%)</th>
                <th>Kelembapan Tanah (%)</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($riwayatData as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->nama_tanaman }}</td>
                    <td>{{ $item->suhu_udara }}</td>
                    <td>{{ $item->kelembapan_udara }}</td>
                    <td>{{ $item->kelembapan_tanah }}</td>
                    <td>
                        @if($item->status_mikroklimat == 'Kering')
                            <span class="status-kering">Kering</span>
                        @elseif($item->status_mikroklimat == 'Optimal')
                            <span class="status-optimal">Optimal</span>
                        @else
                            <span class="status-lembap">Terlalu Lembap</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr><td colspan="8" style="text-align:center;">Belum ada data riwayat.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection