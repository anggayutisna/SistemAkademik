<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Nilai;
use App\MataPelajaran;
use App\Siswa;
use App\KategoriNilai;


class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::orderBy('created_at', 'desc')->get();
        $siswa = Siswa::all();
        $kategorinilai = KategoriNilai::all();
        $matapelajaran = MataPelajaran::all();
        return view('backend.nilai.index', compact('matapelajaran', 'siswa', 'nilai', 'kategorinilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nilai = new Nilai();
        $nilai->siswa_id = $request->siswa;
        $nilai->nilai = $request->nilai;
        $nilai->matapelajaran_id = $request->matapelajaran;
        $nilai->kategorinilai_id = $request->kategorinilai;
        $nilai->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan Nilai <b>$nilai->nilai</b>!"
        ]);

        return redirect()->route('nilai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus Nilai <b>$nilai->nilai</b>!"
        ]);
        return redirect()->route('nilai.index');
    }
}
