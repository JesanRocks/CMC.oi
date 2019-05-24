<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Inventario;
use App\Articulo;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::orderBy('id','DESC')->paginate();
        return view('inventarios.index',compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Consulta en la BD, de todos lo articulos para añadirlos al select
        $articulos = Articulo::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('inventarios.create',compact('articulos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario= Inventario::create($request->all());
        
        return redirect()->route('inventarios.edit', $inventario->id)
            ->with('info','Articulo añadido con exito al inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventario = Inventario::find($id);
        return view('inventarios.show',compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulos = Articulo::orderBy('nombre','ASC')->pluck('nombre','id');
        $inventario = Inventario::find($id);
        return view('inventarios.edit',compact('inventario','articulos'));
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
        $inventario = Inventario::find($id);
        $inventario->fill($request->all())->save();

        return redirect()->route('inventarios.edit', $inventario->id)
            ->with('info','Articulo de inventario actualizado con exito'); 
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
    }
}
