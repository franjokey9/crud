<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Sucursal;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $productos = Producto::all();
       
        

        return view('producto.index')->with('productos',$productos);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $categorias = Categoria::pluck('categoria');
        $sucursales = Sucursal::pluck('sucursal');
        return view('producto.create')->with('categorias',$categorias)->with('sucursales',$sucursales);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto();
        $productos->nombre = $request->get('nombre');
        $productos->descripcion = $request->get('descripcion');
        $productos->categoria = $request->get('categoria');
        $productos->sucursal = $request->get('sucursal');
        $productos->precio = $request->get('precio');
        $productos->estado = "";
        $productos->comentario = "";
        $productos->crate_at = date("d/m/Y  H:i:s");
        

        $productos->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
       
        
        return view('producto.edit')->with('producto',$producto);
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
        $producto = Producto::find($id);
        echo $id;
        
        $producto->estado = $request->get('estado');
        $producto->comentario = $request->get('comentario');

        $producto->save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $producto = Producto::find($id);
        $producto->delete();
        return redirect('/productos');
    }
}
