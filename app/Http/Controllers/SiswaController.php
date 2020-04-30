<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Jurusan;
use App\Kelas;
use App\User;
use Session;
use Auth;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Queue\Jobs\SyncJob;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::orderBy('created_at', 'desc')->get();
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        $user = User::all();
        return view('backend.siswa.index', compact('siswa', 'jurusan', 'kelas', 'user'));
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
        $siswa = new Siswa;
        $siswa->nis = $request->nis;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->tempat_tinggal = $request->tempat_tinggal;
        $siswa->slug = Str::slug($request->nama_siswa);
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->no_telpon = $request->no_telpon;
        $siswa->jurusan_id = $request->jurusan;
        $siswa->kelas_id = $request->kelas;
        $siswa->email_id = $request->email;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/siswa/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $siswa->foto = $filename;
        }

        $siswa->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data siswa bernama <b>$siswa->nama_siswa</b>!"
        ]);
        return redirect()->route('siswa.index');
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
        $siswa = Siswa::findOrFail($id);
        $jurusan = Jurusan::all();
        $user = User::all();
        $kelas = Kelas::all();
        return view('backend.siswa.edit', compact('siswa', 'user', 'jurusan', 'kelas'));
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
        $siswa = Siswa::findOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->tempat_tinggal = $request->tempat_tinggal;
        $siswa->slug = Str::slug($request->nama_siswa);
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->no_telpon = $request->no_telpon;
        $siswa->jurusan_id = $request->jurusan_id;
        $siswa->kelas_id = $request->kelas_id;
        $siswa->email_id = $request->email_id;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path() . '/assets/img/siswa/';
            $filename = Str::random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if ($siswa->foto) {
                $old_foto = $siswa->foto;
                $filepath = public_path() . '/assets/img/siswa/' . $siswa->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                }

                $siswa->foto = $filename;
            }
        }
        $siswa->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data siswa bernama <b>$siswa->nama_siswa</b>!"
        ]);
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        Session::flash("flash_notification", [
            "level" => "danger",
            "message" => "Berhasil menghapus Siswa <b>$siswa->nama_siswa</b>!"
        ]);
        return redirect()->route('siswa.index');
    }
}
