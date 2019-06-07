<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;

use App\Http\Requests\GrupoStoreRequest;
use App\Http\Requests\GrupoUpdateRequest;

use App\Http\Controllers\Controller;
use App\Grupo;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::orderBy('id','DESC')->paginate();
        return view('catalogo/grupos.index',compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogo/grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrupoStoreRequest $request)
    {
        $grupo= Grupo::create($request->all());
        
        return redirect()->route('grupos.edit', $grupo->id)
            ->with('info','Grupo registrado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grupo = Grupo::find($id);
        return view('catalogo/grupos.show',compact('grupo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = Grupo::find($id);
        return view('catalogo/grupos.edit',compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(GrupoUpdateRequest $request, $id)
    {
        $grupo = Grupo::find($id);
        $grupo->fill($request->all())->save();

        return redirect()->route('grupos.edit', $grupo->id)
            ->with('info','Grupo actualizado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grupo = Grupo::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}
