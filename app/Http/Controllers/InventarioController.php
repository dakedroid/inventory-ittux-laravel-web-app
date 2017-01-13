<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InventarioFormRequest;
use App\InventarioModel;
use App\Http\Requests\Historial_altasFormRequest;
use App\Http\Requests\Historial_salidasFormRequest;
use App\Historial_altasModel;
use App\Historial_salidasModel;
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
        //$inventario=InventarioModel::findOrFail($request->get('clave'));

        $cantidad = DB::table('inventario')->where('clave', $request->get('clave'))->get()->pluck('cantidad');

        if ($cantidad == "[]"){
            $inventario = new InventarioModel ;
            $inventario->clave=$request->get('clave');
            $inventario->nombre=$request->get('nombre');
            $inventario->categoria=$request->get('categoria');

            $cat = $request->get('categoria');

            if ($cat == "Papeleria"){
                $inventario->tipo="Consumible";
            }else {
                 $inventario->tipo="";
            }

            $inventario->cantidad=$request->get('cantidad');
            $inventario->unidad=$request->get('unidad');
            $inventario->save();

        }else{
            $n_cantidad = $cantidad->get(0) + $request->get('cantidad');
            DB::table('inventario')
            ->where('clave', $request->get('clave'))
            ->update(['cantidad' => $n_cantidad]);
        }

        $historial_e=new Historial_altasModel;
        $historial_e->clave=$request->get('clave');
        $historial_e->nombre=$request->get('nombre');
        $historial_e->categoria=$request->get('categoria');
        $historial_e->tipo="";
        $historial_e->cantidad=$request->get('cantidad');
        $historial_e->unidad=$request->get('unidad');
        $historial_e->created_at="2017-01-18 04:15:21";
        $historial_e->save();


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

        $historial_s=new Historial_salidasModel;

        $historial_s->clave=$request->get('clave');
        $historial_s->nombre=$request->get('nombre');
        $historial_s->categoria=$request->get('categoria');
        $historial_s->tipo="";
        $historial_s->cantidad=$request->get('c_prestar');
        $historial_s->unidad=$request->get('unidad');
        $historial_s->portador=$request->get('portador');
        $historial_s->created_at="2017-01-18 04:15:21";
        $historial_s->save();

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

        DB::table('historial_salidas')->where('clave', $request->get('clave'))->delete();

        //$inventario ->condiczion='0';
        //$inventario ->update();
        return Redirect::to('almacen/inventario');
    }
}
