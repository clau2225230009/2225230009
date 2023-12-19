<?php

namespace App\Http\Controllers;

use App\Models\claudia;
use Illuminate\Http\Request;

class claudia_s extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $data=claudia::all();
        return view('isian.tampildata')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('isian.InputData');
    }

    /**
     * Store a newly created resource in storage.
     
     */
    public function store(Request $request)
    {
       $request-> validate([
        'nama'=> 'required',
        'kelas'=> 'required',
        'nominal'=> 'required'
       ]);
       $data=[
        'nama'=> $request->input('nama'),
        'kelas'=> $request->input('kelas'),
        'nominal'=> $request->input('nominal'),
       ];
       claudia::create($data);
       return redirect('isian');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data =claudia::where('nama', $id)->first();
        return view('isian.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'nama'=> 'required',
            'kelas'=> 'required',
            'nominal'=> 'required'
           ]);
           $data=[
            'nama'=> $request->input('nama'),
            'kelas'=> $request->input('kelas'),
            'nominal'=> $request->input('nominal'),
           ];
           claudia::where('nama',$id)->update($data);
           return redirect('isian')->with('success','Data Berhasil diUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        claudia::where('nama',$id)->delete( );
           return redirect('isian')->with('success','Data Berhasil dihapus!');
    }
}
