@extends('layouts.main')

@section('content')
    <h2>Form Input Hasil Prediksi Mikroklimat</h2>
    <form action="{{ route('hasil-prediksi') }}" method="POST">
        @csrf
        <p>
            <label>Lokasi Lahan:</label><br>
            <select name="lokasi" required>
                <option value="Garut Kota">Garut Kota</option>
                <option value="Tarogong Kaler">Tarogong Kaler</option>
                <option value="Samarang">Samarang</option>
            </select>
        </p>
        <p>
            <label>Nama Tanaman:</label><br>
            <input type="text" name="nama_tanaman" placeholder="Padi / Jagung / Cabai" required>
        </p>
        <p>
            <label>Prediksi Suhu Udara (&deg;C):</label><br>
            <input type="number" step="0.1" name="suhu_udara" required>
        </p>
        <p>
            <label>Prediksi Kelembapan Udara (%):</label><br>
            <input type="number" name="kelembapan_udara" required>
        </p>
        <p>
            <label>Prediksi Kelembapan Tanah (%):</label><br>
            <input type="number" name="kelembapan_tanah" required>
        </p>
        <button type="submit" class="btn">Proses & Simpan</button>
    </form>
@endsection