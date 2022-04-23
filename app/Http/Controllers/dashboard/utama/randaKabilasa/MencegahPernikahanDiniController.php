<?php

namespace App\Http\Controllers\dashboard\utama\randaKabilasa;

use App\Http\Controllers\Controller;
use App\Models\AnggotaKeluarga;
use App\Models\MencegahPernikahanDini;
use App\Models\RandaKabilasa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class MencegahPernikahanDiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);
        return view('dashboard.pages.utama.randaKabilasa.mencegahPernikahanDini.create', compact('randaKabilasa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function proses(Request $request)
    {
        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);
        $validator = Validator::make(
            $request->all(),
            [
                'jawaban_1' => 'required',
                'jawaban_2' => 'required',
                'jawaban_3' => 'required',
            ],
            [
                'jawaban_1.required' => 'Jawaban Tidak Boleh Kosong',
                'jawaban_2.required' => 'Jawaban Tidak Boleh Kosong',
                'jawaban_3.required' => 'Jawaban Tidak Boleh Kosong',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        $nilai1 = $request->jawaban_1[0] == 'Ya' ? 2 : 0;
        $nilai2 = $request->jawaban_2[0] == 'Ya' ? 1 : 0;
        $nilai3 = $request->jawaban_3[0] == 'Ya' ? 2 : 0;

        $hasil = ($nilai1 + $nilai2 + $nilai3);

        if ($hasil >= 2) {
            $kategori = 'Tidak Berpartisipasi Mencegah Stunting';
        } else {
            $kategori = 'Berpartisipasi Mencegah Stunting';
        }

        $datetime1 = date_create(date('Y-m-d'));
        $datetime2 = date_create($randaKabilasa->anggotaKeluarga->tanggal_lahir);
        $interval = date_diff($datetime1, $datetime2);
        $usia =  $interval->format('%y Tahun %m Bulan %d Hari');

        $data = [
            'anggota_keluarga_id' => $randaKabilasa->anggota_keluarga_id,
            'nama_anak' => $randaKabilasa->anggotaKeluarga->nama_lengkap,
            'tanggal_lahir' => $randaKabilasa->anggotaKeluarga->tanggal_lahir,
            'usia_tahun' => $usia,
            'kategori' => $kategori,
        ];
        return $data;
    }

    public function store(Request $request)
    {
        $data = $this->proses($request);
        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);

        $randaKabilasa->is_mencegah_pernikahan_dini = 1;
        $randaKabilasa->kategori_mencegah_pernikahan_dini = $data['kategori'];
        $randaKabilasa->save();

        $mencegahPernikahanDini = new MencegahPernikahanDini();
        $mencegahPernikahanDini->randa_kabilasa_id = $request->randaKabilasa;
        $mencegahPernikahanDini->jawaban_1 = $request->jawaban_1[0];
        $mencegahPernikahanDini->jawaban_2 = $request->jawaban_2[0];
        $mencegahPernikahanDini->jawaban_3 = $request->jawaban_3[0];

        $mencegahPernikahanDini->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RandaKabilasa  $randaKabilasa
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);

        $kategori = $randaKabilasa->kategori_mencegah_pernikahan_dini;

        $anak = AnggotaKeluarga::where('id', $randaKabilasa->anggota_keluarga_id)->withTrashed()->first();

        $datetime1 = date_create(date('Y-m-d'));
        $datetime2 = date_create($anak->tanggal_lahir);
        $interval = date_diff($datetime1, $datetime2);
        $usia =  $interval->format('%y Tahun %m Bulan %d Hari');

        $data = [
            'nama_anak' => $anak->nama_lengkap,
            'tanggal_lahir' => Carbon::parse($anak->tanggal_lahir)->translatedFormat('d F Y'),
            'usia_tahun' => $usia,
            'desa_kelurahan' => $anak->wilayahDomisili->desaKelurahan->nama,
            'jenis_kelamin' => $anak->jenis_kelamin,
            'kategori' => $kategori,
            'tanggal_proses' => Carbon::parse($randaKabilasa->created_at)->translatedFormat('d F Y'),
            'tanggal_validasi' => Carbon::parse($randaKabilasa->tanggal_validasi)->translatedFormat('d F Y'),
            'bidan' => $randaKabilasa->bidan->nama_lengkap,
        ];

        return view('dashboard.pages.utama.randaKabilasa.mencegahPernikahanDini.show', compact('randaKabilasa', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RandaKabilasa  $randaKabilasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);
        return view('dashboard.pages.utama.randaKabilasa.mencegahPernikahanDini.edit', compact('randaKabilasa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RandaKabilasa  $randaKabilasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $this->proses($request);

        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);
        $randaKabilasa->kategori_mencegah_pernikahan_dini = $data['kategori'];
        $randaKabilasa->save();

        $mencegahPernikahanDini = MencegahPernikahanDini::find($request->randaKabilasa);
        $mencegahPernikahanDini->randa_kabilasa_id = $request->randaKabilasa;
        $mencegahPernikahanDini->jawaban_1 = $request->jawaban_1[0];
        $mencegahPernikahanDini->jawaban_2 = $request->jawaban_2[0];
        $mencegahPernikahanDini->jawaban_3 = $request->jawaban_3[0];
        $mencegahPernikahanDini->save();

        return response()->json([
            'status' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RandaKabilasa  $randaKabilasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $randaKabilasa = RandaKabilasa::find($request->randaKabilasa);

        $randaKabilasa->is_mencegah_pernikahan_dini = 0;
        $randaKabilasa->save();

        $mencegahPernikahanDini = MencegahPernikahanDini::where('randa_kabilasa_id', $request->randaKabilasa)->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
