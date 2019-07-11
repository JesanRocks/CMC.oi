<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;//Encriptar

use App\Http\Controllers\Controller;
use App\User;
use App\Cargo;

class UsuarioController extends Controller
{
    /*Only the user with 'cargo_id' == 'Administrador' be make create New users.*/
    public function __construct()
    {
        $this->middleware('administrador');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::orderBy('id','ASC')->paginate();
        return view('usuarios.index', compact('usuarios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $cargos = Cargo::orderBy('id','ASC')->pluck('dsc','id');
       return view('usuarios.create')->with('cargos', $cargos);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        $request->request->add([
            'password' => Hash::make($request->input('password'))
        ]);

        $usuario= User::create($request->all());
        return redirect()->route('usuarios.edit', $usuario->id)
            ->with('info','Usuario registrado con exito');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view('usuarios.show', compact('usuario'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        $cargos = Cargo::orderBy('id','ASC')->pluck('dsc','id');
        return view('usuarios.edit', compact('usuario'))->with('cargos', $cargos); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {

        // $usuario = User::find($id);
        // $usuario->fill($request->all())->save();

        // return redirect()->route('usuarios.edit', $usuario->id)
        //     ->with('info','Usuario actualizado con exito');

        $usuario = User::find($id);
        
        // Si recibe algun cambio en el correo o la contraseña lo actualiza
        $request->request->add([
            'password' => Hash::make($request->input('password')),
            'email' => $request->input('email'),
        ]);
        
        $usuario->fill($request->all())->save();
        return redirect()->route('usuarios.edit', $usuario->id)
            ->with('info','Usuario actualizado con exito');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id)->delete();
        return back()->with('info','Eliminado correctamente'); 
    }
}
//concejomunicipaldecedeno2019@gmail.com
//riocaribe1993