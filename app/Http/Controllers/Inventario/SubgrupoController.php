<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Subgrupo;
use App\Grupo;

class SubgrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subgrupos= Subgrupo::orderBy('id','DESC')->paginate();
        return view('catalogo/subgrupos.index',compact('subgrupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupo::orderBy('codigo','ASC')->pluck('codigo','id');
        return view('catalogo/subgrupos.create',compact('grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subgrupo= Subgrupo::create($request->all());
        
        return redirect()->route('subgrupos.edit', $subgrupo->id)
            ->with('info','Subgrupo registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subgrupo = Subgrupo::find($id);
        return view('catalogo/subgrupos.show',compact('subgrupo'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subgrupo = Subgrupo::find($id);
        $grupos = Grupo::orderBy('codigo','ASC')->pluck('codigo','id');
        return view('catalogo/subgrupos.edit',compact('subgrupo','grupos'));
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
        $subgrupo = Subgrupo::find($id);
        $subgrupo->fill($request->all())->save();

        return redirect()->route('subgrupos.edit', $subgrupo->id)
            ->with('info','Subgrupo actualizado con exito'); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subgrupo = Subgrupo::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}