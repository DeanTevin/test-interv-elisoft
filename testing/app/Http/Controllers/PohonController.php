<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pohon;
use Illuminate\Support\Facades\Session;

class PohonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pohon = Pohon::get();
        return view('pohon.index',compact('pohon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pohon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           
            'ordo' => 'required',
            'famili' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'jumlah' => 'required',
        ]);

        $pohon = Pohon::create([

            'ordo' => $request->ordo,
            'famili' => $request->famili,
            'genus' => $request->genus,
            'species' => $request->species,
            'jumlah'=> $request->jumlah,
          
         
        ]);
        Session::flash('success');
        return redirect(route('pohon.create'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pohon = Pohon::findOrFail($id);
        return view('pohon.edit', compact('pohon'));
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
        $this->validate($request, [
           
            'ordo' => 'required',
            'famili' => 'required',
            'genus' => 'required',
            'species' => 'required',
            'jumlah' => 'required',
        ]);
        
        $pohon = Pohon::findOrfail($id);
         
            
        $pohon->update([

            'ordo' => $request->ordo,
            'famili' => $request->famili,
            'genus' => $request->genus,
            'species' => $request->species,
            'jumlah'=> $request->jumlah,
        ]);
        Session::flash('success');
        return redirect(route('pohon.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pohon = Pohon::findOrFail($id);  
        $pohon->delete();
        Session::flash('delete');
        return redirect()->back();
    }
}
