<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Pinjam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create(Request $request)
    {
        // $this->validate($request,[
        //     'nama_barang' => 'required|min:3',
        //     'jumlah_barang' => 'required',
        // ]);

        $barang = new Barang();
        $barang->nama_barang=$request->input('nama_barang');
        $jml=$request->input('jumlah_barang');
        $barang->jumlah_barang = $jml;
        $barang->stok_barang= $jml;
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $barang->avatar= $request->file('avatar')->getClientOriginalName();
            $barang->save();
        }

        return redirect('/barang');
    }

    public function delete($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang')->with('hapus','data berhasil di Hapus');
    }

    public function PinjamBarang($id){
        $barang= Barang::whereId($id)->first();
        return view('barang.pinjam_barang',compact('barang'));
    }

    public function SavePinjamBarang(Request $request, $id){

        $this->validate($request,[
            'jml_pinjam' => 'required',
        ]);

        $barang= Barang::whereId($id)->first();

        $stok = $barang->stok_barang;
        $jml_pinjam = $request->input('jml_pinjam');

        if ($stok == 0){
            return 'Stok habis';
        } elseif($stok > $jml_pinjam or $stok==$jml_pinjam){

            $pinjam = new Pinjam(); // input data baru
            $pinjam->id_barang=$id;
            $pinjam->id_user=Auth::user()->id;
            $pinjam->jumlah_pinjam=$jml_pinjam;
            $pinjam->save();

            $barang->stok_barang -=$jml_pinjam;
            $barang->save();


            return redirect('/historypinjam')->with('sukses','data berhasil');
        } else {
            return redirect('/dashboard')->with(['error'=>'Peminjaman Tidak Berhasil']);;
        }
    }

    public function HistoryPinjam(){
        $tampil= Pinjam::join('barangs' , 'pinjams.id_barang' , '=' , 'barangs.id')
        ->join('users' , 'pinjams.id_user' ,'=', 'users.id')
        ->get();
        return view('barang.history_pinjam', ['tampil' => $tampil]);
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        $pinjam = Pinjam::get();
        return view('barang.kembalipinjam',['barang' => $barang, 'pinjam' => $pinjam]);
    }

    public function updatekembali(Request $request, $id)
    {

        $barang = Barang::find($id);
        $stok = $barang->stok_barang;
        $jml_pinjam = $request->input('jml_pinjam');
        if ($stok == 0){
            return 'Stok habis';
        } elseif($stok > $jml_pinjam or $stok==$jml_pinjam){
            $pinjam = new Pinjam(); // input data baru
            $pinjam->id_barang=$id;
            $pinjam->id_user=Auth::user()->id;
            $pinjam->jumlah_pinjam=$jml_pinjam;
            $pinjam->update();

            $barang->stok_barang +=$jml_pinjam;
            $barang->update();

        // $barang->stok_barang +=$jumlah_pinjam;

        // $barang->update($request->all());

        // $barang = Pinjam::find($id);
        // $barang->delete();

        // return redirect('/historypinjam');

    }
    }
    public function deletepinjam($jumlah_pinjam)
    {
        $barang = Pinjam::find($jumlah_pinjam);
        $barang->delete();
        return redirect('/historypinjam')->with('hapus','data berhasil di Hapus');
    }

    public function showpinjam()
    {
        $pinjam = Pinjam::all();
        return view('barang.deletepinjam',['pinjam' => $pinjam]);
    }
}
