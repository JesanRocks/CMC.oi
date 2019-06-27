<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;

use App\Http\Requests\ArticuloStoreRequest;
use App\Http\Requests\ArticuloUpdateRequest;

use App\Http\Controllers\Controller;

use App\Articulo;
use App\Subgrupo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos= Articulo::orderBy('id','ASC')->paginate();
        return view('catalogo/articulos.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subgrupos = Subgrupo::orderBy('codigo','ASC')->pluck('codigo','id');
        return view('catalogo/articulos.create',compact('subgrupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticuloStoreRequest $request)
    {
        $articulo= Articulo::create($request->all());
        
        return redirect()->route('articulos.edit', $articulo->id)
            ->with('info','Articulo registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('catalogo/articulos.show',compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        $subgrupos = Subgrupo::orderBy('codigo','ASC')->pluck('codigo','id');
        return view('catalogo/articulos.edit',compact('articulo','subgrupos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticuloUpdateRequest $request, $id)
    {
        $articulo = Articulo::find($id);
        $articulo->fill($request->all())->save();

        return redirect()->route('articulos.edit', $articulo->id)
            ->with('info','Articulo actualizado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}
