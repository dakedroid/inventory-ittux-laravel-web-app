<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\InventarioFormRequest;
use App\InventarioModel;
use App\CarritoModel;
use App\Historial_salidasModel;
use DB;
use PDF;

class SalidasController extends Controller
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
          $inventario =DB::table('inventario')->where('nombre','LIKE','%'.$query.'%')
          ->orderBy('num_progre','desc')
          ->paginate(10);
          return view('almacen.salidas.index',["inventario"=>$inventario ,"searchText"=>$query]);
      }
/*
	<a href="" data-target="#modal-delete-{{$cat->num_progre}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
*/
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

	    $claves = DB::table('carrito')->pluck('clave');
      $nombres = DB::table('carrito')->pluck('nombre');
      $cantidades = DB::table('carrito')->pluck('cantidad');
      $unidades = DB::table('carrito')->pluck('unidad');
      $portador = DB::table('carrito')->pluck('portador')->first();

      $pdf = PDF::loadView('documentos.salidas',[
            'claves'=>$claves,
            'nombres'=>$nombres,
            'cantidades'=>$cantidades,
            'unidades'=>$unidades,
            'portador'=>$portador
      ])->setPaper('a4','portrait');

 
      return $pdf->stream();
	
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
      return view("almacen.salidas.edit",["salidas"=>InventarioModel::findOrFail($id)]);

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

      $carrito = new CarritoModel;
      $carrito->num_progre=$request->get('num_progre');
      $carrito->clave=$request->get('clave');
      $carrito->nombre=$request->get('nombre');
      $carrito->categoria=$request->get('categoria');
      $carrito->tipo="";
      $carrito->cantidad=$request->get('c_prestar');
      $carrito->unidad=$request->get('unidad');
      $carrito->portador=$request->get('portador');
      $carrito->destino="departamento";
      $carrito->save();

      $historial_s = new Historial_salidasModel;
      $historial_s->clave=$request->get('clave');
      $historial_s->nombre=$request->get('nombre');
      $historial_s->categoria=$request->get('categoria');
      $historial_s->tipo="";
      $historial_s->cantidad=$request->get('c_prestar');
      $historial_s->unidad=$request->get('unidad');
      $historial_s->portador=$request->get('portador');
      $historial_s->destino="departamento";
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
  public function destroy()
  {
      DB::table('carrito')->delete();
  
      return Redirect::to('/almacen/prestamo/');

  }

}
