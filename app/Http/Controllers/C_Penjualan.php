<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_Penjualan;
use App\Models\M_Produk;

class C_Penjualan extends Controller
{
    public function dataPenjualanPage()
    {
        $dataPenjualan = M_Penjualan::distinct()->get(['no_faktur']);
        $dataProduk = M_Produk::all();
        $dr = ['dataPenjualan' => $dataPenjualan, 'dataProduk' => $dataProduk];
        return view('main.penjualan.penjualan', $dr);
    }

    public function prosesTambahPenjualan(Request $request)
    {

        // Tangkap data dari form utama
        $noFaktur = Str::uuid();
        // $kodeProduk = $request->kodeProduk;
        // $jumlahProduk = $request->jumlahProduk;

        $penjualan = $request->penjualan;

        // Validasi input utama
        if (/* empty($kodeProduk) || empty($jumlahProduk) */ empty($penjualan)) {
            return response()->json(['status' => 'error', 'message' => 'Data utama tidak lengkap'], 400);
        }

        try {
            foreach ($penjualan as $value) {
                // Simpan data utama
                $penjualanUtama = new M_Penjualan();
                $penjualanUtama->kd_penjualan = $noFaktur;
                $penjualanUtama->no_faktur = $noFaktur;
                $penjualanUtama->kd_barang = $value['kodeProduk'];
                $penjualanUtama->qt = $value['jumlahProduk'];
                $penjualanUtama->save();
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Gagal menyimpan data utama', 'error' => $e->getMessage()], 500);
        }

        /* // Tangkap dan simpan data dari form tambahan
        $produkTambahan = $request->produk;
        $jumlahTambahan = $request->jumlah;

        if (!empty($produkTambahan)) {
            foreach ($produkTambahan as $key => $produk) {
                if (!empty($produk) && isset($jumlahTambahan[$key])) {
                    try {
                        $penjualanTambahan = new M_Penjualan();
                        $penjualanTambahan->kd_penjualan = $noFaktur;
                        $penjualanTambahan->no_faktur = $noFaktur; // Menggunakan nomor faktur yang sama
                        $penjualanTambahan->kd_barang = $produk;
                        $penjualanTambahan->qt = $jumlahTambahan[$key];
                        $penjualanTambahan->save();
                    } catch (\Exception $e) {
                        return response()->json(['status' => 'error', 'message' => 'Gagal menyimpan data tambahan', 'error' => $e->getMessage()], 500);
                    }
                } else {
                    return response()->json(['status' => 'error', 'message' => 'Data tambahan tidak lengkap'], 400);
                }
            }
        } */

        $dr = ['status' => 'sukses'];
        return response()->json($dr);
    }

    public function detailPenjualan(Request $request, $kdFaktur)
    {
        $dataPenjualan = M_Penjualan::where('no_faktur', $kdFaktur)->get();
        $dr = ['kdFaktur' => $kdFaktur, 'dataPenjualan' => $dataPenjualan];
        return view('main.penjualan.detail.detailPenjualan', $dr);
    }
}
