<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndomaretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_karyawan = DB::table('data_karyawan')->get();
        return view('Database.index', ['data_karyawan' => $data_karyawan]);
    }

    public function tambah()
    {
        return view('Database.tambah');
    }

    public function save(Request $request)
    {
        DB::table('data_karyawan')->insert([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect('Indomaret');
    }

    public function edit($id)
    {
        $data_karyawan = DB::table('data_karyawan')->where('id', $id)->get();
        return view('Database.edit', ['data_karyawan' => $data_karyawan]);
    }

    public function update(Request $request)
    {
        DB::table('data_karyawan')->where('id', $request->id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        
        return redirect('Indomaret');
    }

    public function hapus($id)
    {
        DB::table('data_karyawan')->where('id', $id)->delete();

        return redirect('Indomaret');
    }
}
