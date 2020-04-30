<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\KategoriNilai;

class KategoriNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategorinilai = KategoriNilai::orderBy('created_at', 'desc')->get();
        return view('backend.kategorinilai.index', compact('kategorinilai'));
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
        $kategorinilai = new KategoriNilai();
        $kategorinilai->kategori_nilai = $request->kategori_nilai;
        $kategorinilai->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan Kategori Nilai <b>$kategorinilai->kategori_nilai</b>!"
        ]);
        return redirect()->route('kategorinilai.index');
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
        $kategorinilai = KategoriNilai::findOrFail($id);
        $kategorinilai->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus kategori nilai <b>$kategorinilai->kategori_nilai</b>!"
        ]);
        return redirect()->route('kategorinilai.index');
    }
}
