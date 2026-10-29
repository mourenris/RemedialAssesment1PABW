<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrediksiMikroklimat;

class PrediksiController extends Controller
{
    public function index() {
        return view('home');
    }

    public function tentang() {
        return view('tentang');
    }

    public function formPrediksi() {
        return view('prediksi');
    }

    public function prosesData(Request $request) {
        $request->validate([
            'lokasi' => 'required',
            'nama_tanaman' => 'required',
            'suhu_udara' => 'required|numeric',
            'kelembapan_udara' => 'required|numeric',
            'kelembapan_tanah' => 'required|numeric',
        ]);

        $kelembapan_tanah = $request->kelembapan_tanah;

        // Status dan Rekomendasi
        if ($kelembapan_tanah < 40) {
            $status = 'Kering';
            $rekomendasi = 'Segera lakukan penyiraman atau irigasi';
        } elseif ($kelembapan_tanah >= 40 && $kelembapan_tanah <= 70) {
            $status = 'Optimal';
            $rekomendasi = 'Pertahankan pola perawatan saat ini';
        } else {
            $status = 'Terlalu Lembap';
            $rekomendasi = 'Kurangi penyiraman dan periksa drainase';
        }

        // Menyimpan data
        $prediksi = PrediksiMikroklimat::create([
            'lokasi' => $request->lokasi,
            'nama_tanaman' => $request->nama_tanaman,
            'suhu_udara' => $request->suhu_udara,
            'kelembapan_udara' => $request->kelembapan_udara,
            'kelembapan_tanah' => $request->kelembapan_tanah,
            'status_mikroklimat' => $status,
        ]);

        return view('hasil', [
            'data' => $prediksi,
            'rekomendasi' => $rekomendasi
        ]);
    }

    public function riwayat() {
        $riwayatData = PrediksiMikroklimat::orderBy('created_at', 'desc')->get();
        return view('riwayat', compact('riwayatData'));
    }
}