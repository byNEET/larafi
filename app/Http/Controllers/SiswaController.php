<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    //menampilkan semua data
    public function index(){
        return Siswa::all();
    }
    //menyimpan data
    public function create(request $request){
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->alamat = $request->alamat;
        $siswa->email = $request->email;
        $siswa->nohp = $request->nohp;
        $siswa->password = $request->password;
        $siswa->save();

        return "sukses save";
    }

    public function update(request $request, $id){
        $nama = $request->nama;
        $alamat = $request->alamat;
        $email = $request->email;
        $nohp = $request->nohp;
        $password = $request->password;

        $siswa = Siswa::find($id);
        $siswa->nama = $nama;
        $siswa->alamat = $alamat;
        $siswa->email = $email;
        $siswa->nohp = $nohp;
        $siswa->password = $password;
        $siswa->save();

        return "data has been update";
    }

    public function delete($id){
        $siswa = Siswa::find($id);
        $siswa->delete();

        return "data has been delete";
    }
}
 