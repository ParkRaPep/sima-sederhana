<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request) {
        if($request->has('search')) {
            $data = Mahasiswa::where('nama', 'LIKE', '%'. $request->search.'%')->paginate(7);
        } else {
            $data = Mahasiswa::paginate(7);
        }
        return view('datamahasiswa', compact('data'));
    }
    
    public function tambahmahasiswa() {
        return view('tambahdatamahasiswa');
    }

    public function inputdata(Request $request) {
        //dd($request->all());
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampildata($id) {
        $data = Mahasiswa::find($id);
        //dd($data);

        return view('tampildatamahasiswa', compact('data'));
    }

    public function ubahdata(Request $request, $id) {
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Diubah');

    }

    public function hapusdata($id) {
        $data =Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success', 'Data Berhasil Dihapus');
    }
}
