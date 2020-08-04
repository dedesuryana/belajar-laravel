<?php

namespace App\Http\Controllers;

use App\Tittle;
use Illuminate\Http\Request;

class InteraksiController extends Controller
{
    public function index()
    {
        $data = Tittle::all();
        return view('home', compact('data'));
    }

    public function interaksi()
    {
        $data = Tittle::all();
        return view('create',compact('data'));
    }

    public function CreateInteraksi(Request $request)
    {
        // dd($request);
        $data = new Tittle;
        $data->create($request->all());
        return redirect('/');
    }

    public function edit($id)
    {
        $data = Tittle::find($id);
        return view('edit',['data' => $data]);
    }

    public function UpdateInteraksi(Request $request,$id)
    {
        $data = Tittle::find($id);
        $data->update($request->all());
        return redirect('/');

    }

}
