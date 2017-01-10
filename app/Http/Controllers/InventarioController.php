<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InventarioFormRequest;
use App\InventarioModel;
use App\CarritoModel;
use DB;

class InventarioController extends Controller
{
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
            $inventario =DB::table('inventario')->where('nombre','LIKE','%'.$query.'%')
            ->orderBy('num_progre','desc')
            ->paginate(10);
            return view('almacen.inventario.index',["inventario"=>$inventario ,"searchText"=>$query]);
        }
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("almacen.inventario.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario = new InventarioModel ;
        $inventario->clave=$request->get('clave');
        $inventario->nombre=$request->get('nombre');
        $inventario->categoria=$request->get('categoria');
        $inventario->tipo="";
        $inventario->cantidad=$request->get('cantidad');
        $inventario->unidad=$request->get('unidad');
        $inventario->save();

        return Redirect::to('almacen/inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("almacen.inventario.show",["inventario"=>InventarioModel::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("almacen.inventario.edit",["inventario"=>InventarioModel::findOrFail($id)]);

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

        $inventario=InventarioModel::findOrFail($id);
        $inventario->clave=$request->get('clave');
        $inventario->nombre=$request->get('nombre');
        $inventario->categoria=$request->get('categoria');
        $inventario->tipo="";
        $inventario->cantidad=($request->get('cantidad'))-($request->get('c_prestar'));
        $inventario->unidad=$request->get('unidad');
        $inventario->update();

        $carrito=new CarritoModel;
        $carrito->num_progre=$request->get('num_progre');
        $carrito->clave=$request->get('clave');
        $carrito->nombre=$request->get('nombre');
        $carrito->categoria=$request->get('categoria');
        $carrito->tipo="";
        $carrito->cantidad=$request->get('c_prestar');
        $carrito->unidad=$request->get('unidad');
        $carrito->portador=$request->get('portador');

        $carrito->save();
        return Redirect::to('almacen/carrito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$inventario =inventario Model::findOrFail($id);
        //$query="DELETE FROM inventario Model where num_progre='$id'";

        DB::table('inventario')->where('num_progre', $id)->delete();
        //$inventario ->condicion='0';
        //$inventario ->update();
        return Redirect::to('almacen/inventario');
    }
}
