<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
          //
        $barang = Barang::all();
          return view('Barang.index', compact('barang'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang;
        $barang ->merk= $request->a;
        $barang ->harga= $request->b;
        $barang ->stock= $request->c;
        $barang -> save();
        return redirect('Barang');
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
        $barang=Barang::findOrfail($id);
        return view('Barang.show', compact('barang'));
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
         $barang=Barang::findOrfail($id);
        return view('Barang.edit', compact('barang'));
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
         $barang = Barang::findOrfail($id);
        $barang ->merk= $request->a;
        $barang ->harga= $request->b;
        $barang ->stock= $request->c;
        $barang -> save();
        return redirect('Barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
      $barang=Barang::findOrfail($id);
      $barang->delete();
      return redirect('Barang');
    }
}
