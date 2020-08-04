<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::when($request->cari, function ($query) use ($request) {
            $query->where('nama_barang', 'like', "%{$request->cari}%")
                ->orWhere('jumlah_barang', 'like', "%{$request->cari}%");
        })->paginate(6);
        return view('dashboards.index', ['barang' => $barang]);
    }
}
