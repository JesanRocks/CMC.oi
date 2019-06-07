<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;

use App\Http\Requests\ColorStoreRequest;
use App\Http\Requests\ColorUpdateRequest;

use App\Http\Controllers\Controller;
use App\Color;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colores = Color::orderBy('id','DESC')->paginate();
        return view('catalogo/colores.index',compact('colores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogo/colores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorStoreRequest $request)
    {
        $color= Color::create($request->all());
        
        return redirect()->route('colores.edit', $color->id)
            ->with('info','Color añadido con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $color = Color::find($id);
        return view('catalogo/colores.show',compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::find($id);
        return view('catalogo/colores.edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(ColorUpdateRequest $request, $id)
    {
        $color = Color::find($id);
        $color->fill($request->all())->save();

        return redirect()->route('colores.edit', $color->id)
            ->with('info','Color actualizado con exito'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}