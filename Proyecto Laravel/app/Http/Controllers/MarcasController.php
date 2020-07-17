<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;
class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas= Marca::all();
        return view('/admin/admMarcas', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $marcas = Marca::all();
        return view('/admin/formAgregarMarca',
            [
                'marcas'=>$marcas
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [
            "nombreMarca" => "String|min:3|unique:marcas,mkNombre|required"
        ];

        $mensajes = [
            "String" => "el campo :attribute debe contener letras",
            "min"=> "Debe tener minimo :min",
            "unique"=> "El nombre que ingreso ya existe",
            "required"=> "El campo :attribute no puede estar en blanco"
        ];

        $this->validate($request,$reglas, $mensajes);

        $nuevaMarca = new Marca();
        $nuevaMarca->mkNombre = $request['mkNombre'];
        $nuevaMarca->save();
        return redirect('admin/admMarcas');
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
        //
        $marcas = Marca::find($id);
        return view('/admin/formModificarMarca',
            [
                'marcas'=>$marcas
            ]);
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
        $reglas = [
            "nombreMarca" => "String|min:3|unique:marcas,mkNombre|required"
        ];

        $mensajes = [
            "String" => "el campo :attribute debe contener letras",
            "min"=> "Debe tener minimo :min",
            "unique"=> "El nombre que ingreso ya existe",
            "required"=> "El campo :attribute no puede estar en blanco"
        ];

        $this->validate($request,$reglas, $mensajes);

        $ModificarMarca= Marca::find($id);

        $ModificarMarca->mkNombre = $request['mkNombre'];
        $ModificarMarca->save();
        return redirect('/admin/admMarcas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eliminarMarca = Marca::find($id);

        $eliminarMarca->delete();

        return redirect("/admin/admMarcas");
    }
}
