<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ArticulosFormRequest;
use App\ArticuloModel;
use App\CarritoModel;
use DB;

class ArticulosController extends Controller
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
            $articulo=DB::table('articulo_existencia')->where('nombre','LIKE','%'.$query.'%')
            ->where('condicion','1')
            ->orderBy('num_progre','asc')
            ->paginate(10);
            return view('almacen.articulo.index',["articulo"=>$articulo,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("almacen.articulo.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulo=new ArticuloModel;
        $articulo->nombre=$request->get('nombre');
        $articulo->id = $request->get('id');
        $articulo->categoria=$request->get('categoria');
        $articulo->cantidad=$request->get('cantidad');
        $articulo->unidad=$request->get('unidad');
        $articulo->condicion='1';
        $articulo->producto='consumible';
        $articulo->save();
        return Redirect::to('almacen/articulo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("almacen.articulo.show",["articulo"=>ArticuloModel::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view("almacen.articulo.edit",["articulo"=>ArticuloModel::findOrFail($id)]);

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

        $articulo=ArticuloModel::findOrFail($id);
        $articulo->nombre=$request->get('nombre');
        $articulo->categoria=$request->get('categoria');
        $articulo->cantidad=($request->get('cantidad'))-($request->get('c_prestar'));
        $articulo->unidad=$request->get('unidad');
        $articulo->update();

        $carrito=new CarritoModel;
        $carrito->num_progre=$request->get('num_progre');
        $carrito->id=$request->get('id');
        $carrito->nombre=$request->get('nombre');
        $carrito->categoria=$request->get('categoria');
        $carrito->cantidad=$request->get('c_prestar');
        $carrito->unidad=$request->get('unidad');
        $carrito->portador=$request->get('portador');
        $carrito->producto='consumible';
        $carrito->condicion='1';
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
        //$articulo=ArticuloModel::findOrFail($id);
  //        $query="DELETE FROM ArticuloModel where num_progre='$id'";

        DB::table('articulo_existencia')->where('num_progre', $id)->delete();
        //$articulo->condicion='0';
        //$articulo->update();
        return Redirect::to('almacen/articulo');
    }
}
