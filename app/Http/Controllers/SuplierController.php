<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suplier;
class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
          //
        $sup = Suplier::all();
          return view('suplier.index', compact('sup'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('suplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sup = new Suplier;
        $sup ->nama_perusahaan= $request->a;
        $sup -> save();
        return redirect('Suplier');
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
        $sup=Suplier::findOrfail($id);
        return view('suplier.show', compact('sup'));
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
         $sup=Suplier::findOrfail($id);
        return view('suplier.edit', compact('sup'));
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
         $sup = Suplier::findOrfail($id);
        $sup ->nama_perusahaan= $request->a;
        $sup -> save();
        return redirect('Suplier');
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
      $sup=Suplier::findOrfail($id);
      $sup->delete();
      return redirect('Suplier');
    }
}