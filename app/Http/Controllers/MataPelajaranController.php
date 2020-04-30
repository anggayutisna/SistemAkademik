<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\MataPelajaran;

class MataPelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matapelajaran = MataPelajaran::orderBy('created_at', 'desc')->get();
        return view('backend.matapelajaran.index', compact('matapelajaran'));
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
        $matapelajaran = new MataPelajaran();
        $matapelajaran->mata_pelajaran = $request->mata_pelajaran;
        $matapelajaran->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan Mata Pelajaran <b>$matapelajaran->mata_pelajaran</b>!"
        ]);
        return redirect()->route('matapelajaran.index');
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
        $matapelajaran = MataPelajaran::findOrFail($id);
        $matapelajaran->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus Mata Pelajaran <b>$matapelajaran->mata_pelajaran</b>!"
        ]);
        return redirect()->route('matapelajaran.index');
    }
}
