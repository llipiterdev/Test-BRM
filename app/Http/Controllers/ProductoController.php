<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('formularios/visualizacion', compact('productos'));
    }

    public function getClienteProductos()
    {
        $productos = Producto::all();
        return view('formularios/cliente-productos', compact('productos'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('formularios/proveedor', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validar_campos = $request->validate([
            'nombre' => 'required|max:50|unique:producto,nombre',
            'cantidad' => 'required|numeric',
            'fecha_vencimiento' => 'required',
            'precio' => 'required|numeric',
        ]);

        Producto::create($validar_campos)->with('mensaje', 'Se ha añadido el producto');
        return redirect('/visualizacion');
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
        $producto = Producto::findOrFail($id);
        return view('formularios/cliente', compact('producto'));
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
        $validar_campos = $request->validate([
            'cantidad' => "required|numeric|",
        ]);


        Producto::whereId($id)->decrement('cantidad', (int) implode('', $validar_campos));
        return redirect('/cliente')->with('mensaje', 'Se ha actualizado el inventario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect('/visualizacion')->with('mensaje', $id);
    }


    public function restore($id)
    {
        //Indicamos que la busqueda se haga en los registros eliminados con withTrashed

        $producto = Producto::withTrashed()->where('id', '=', $id)->first();

        //Restauramos el registro
        $producto->restore();

        return redirect('/visualizacion')->with("restored", $id);
    }
}
