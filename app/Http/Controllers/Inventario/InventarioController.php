<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;

use App\Http\Requests\InventarioStoreRequest;
use App\Http\Requests\InventarioUpdateRequest;

use App\Http\Controllers\Controller;

use App\Inventario;
use App\Articulo;
use App\Grupo;
use App\Marca;
use App\Color;
use App\Departamento;
use App\User;

class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('registrador');
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::orderBy('id','ASC')->paginate();
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
        $articulos      = Articulo::orderBy('codigo','ASC')->pluck('dsc','id');
        $grupos         = Grupo::orderBy('id','ASC')->pluck('codigo','id');
        $marcas         = Marca::orderBy('nombre','ASC')->pluck('nombre','id');
        $colores        = Color::orderBy('nombre','ASC')->pluck('nombre','id');
        $departamentos  = Departamento::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('inventarios.create',compact(
            'articulos',
            'grupos',
            'marcas',
            'colores',
            'departamentos'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InventarioStoreRequest $request)
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
        $articulos      = Articulo::orderBy('codigo','ASC')->pluck('dsc','id');
        $grupos         = Grupo::orderBy('codigo','ASC')->pluck('codigo','id');
        $marcas         = Marca::orderBy('nombre','ASC')->pluck('nombre','id');
        $colores        = Color::orderBy('nombre','ASC')->pluck('nombre','id');
        $departamentos  = Departamento::orderBy('nombre','ASC')->pluck('nombre','id');
        $inventario     = Inventario::find($id);
        return view('inventarios.edit',compact(
            'inventario',
            'articulos',
            'grupos',
            'marcas',
            'colores',
            'departamentos'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InventarioUpdateRequest $request, $id)
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
