<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Tittle;
use App\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
        $data_siswa = Siswa::where('nama_depan','LIKE', '%'.$request->cari.'%')->get();
        }else{
           $data_siswa = Siswa::all();
        }
        return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {

        //ini untuk insert ke table user
        $user = new User;
        $user->role = 'siswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('siswa123456');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table siswa
        $request->request->add(['user_id' => $user->id]);
        $siswa = Siswa::create($request->all());
        return redirect('/siswa')->with('sukses','data berhasil di simpan');
    }


    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit',['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $siswa->avatar= $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
        return redirect('/siswa')->with('sukses','data berhasil di simpan');

    }

    public function delete($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('hapus','data berhasil di Hapus');
    }

    public function profile($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.profile',['siswa' => $siswa]);
    }

    public function interaksi()
    {
        $siswa = Tittle::all();
        return view('home',['siswa' => $siswa]);
    }


}
