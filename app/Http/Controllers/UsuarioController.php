<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InventarioFormRequest;
use App\InventarioModel;
use App\Http\Requests\UsuarioFormRequest;

use App\Historial_altasModel;
use App\Historial_salidasModel;
use App\CarritoModel;
use App\User;
use DB;

class UsuarioController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $usuarios =DB::table('users')->where('name','LIKE','%'.$query.'%')
            ->orderBy('id','desc')
            ->paginate(10);
            return view('almacen.usuario.index',["usuarios"=>$usuarios ,"searchText"=>$query]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("almacen.usuario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioFormRequest $request)
    {

        $usuario=new User;
        $usuario->name=$request->get('name');
        $usuario->email=$request->get('email');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->save();
        return Redirect::to('almacen/usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("almacen.usuario.show",["usuario"=>User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("almacen.usuario.edit",["usuario"=>User::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioFormRequest $request, $id)
    {

      $usuario=User::findOrFail($id);
      $usuario->name=$request->get('name');
      $usuario->email=$request->get('email');
      $usuario->password=bcrypt($request->get('password'));
      $usuario->update();
      return Redirect::to('almacen/usuario');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $usuario = DB::table('users')->where('id','=', $id)->delete();
        return Redirect::to('almacen/usuario');
    }
}
