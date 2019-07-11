<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoStoreRequest;
use App\Http\Requests\DepartamentoUpdateRequest;

use App\Http\Controllers\Controller;
use App\Departamento;

class DepartamentoController extends Controller
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
        $departamentos = Departamento::orderBy('id','DESC')->paginate();
        return view('catalogo/departamentos.index',compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogo/departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartamentoStoreRequest $request)
    {
        $departamento= Departamento::create($request->all());
        
        return redirect()->route('departamentos.edit', $departamento->id)
            ->with('info','Departamento añadido con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamento = Departamento::find($id);
        return view('catalogo/departamentos.show',compact('departamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamento = Departamento::find($id);
        return view('catalogo/departamentos.edit',compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(DepartamentoUpdateRequest $request, $id)
    {
        $departamento = Departamento::find($id);
        $departamento->fill($request->all())->save();

        return redirect()->route('departamentos.edit', $departamento->id)
            ->with('info','Departamento actualizado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Departamento::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}