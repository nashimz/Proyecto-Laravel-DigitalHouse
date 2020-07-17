<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias= Categoria::all();
        return view('/admin/admCategorias', compact('categorias'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias = Categoria::all();
        return view('/admin/formAgregarCategoria',
            [
                'categorias'=>$categorias
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
            "catNombre" => "String|min:3|unique:categorias,catNombre|required"
        ];

        $mensajes = [
            "String" => "el campo :attribute debe contener letras",
            "min"=> "Debe tener minimo :min",
            "unique"=> "El nombre que ingreso ya existe",
            "required"=> "El campo no puede estar en blanco"
        ];

        $this->validate($request,$reglas, $mensajes);
        $nuevaCategoria = new Categoria();
        $nuevaCategoria->catNombre = $request['catNombre'];
        $nuevaCategoria->save();
        return redirect('admin/admCategorias');
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
        $categorias = Categoria::find($id);
        return view('/admin/formModificarCategoria',
            [
                'categorias'=>$categorias
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
            "catNombre" => "String|min:1|unique:categorias,catNombre|required"
        ];

        $mensajes = [
            "String" => "el campo :attribute debe contener letras",
            "min"=> "Debe tener minimo :min",
            "unique"=> "El nombre que ingreso ya existe",
            "required"=> "El campo :attribute no puede estar en blanco"
        ];

        $this->validate($request,$reglas, $mensajes);

        $ModificarCategoria= Categoria::find($id);

        $ModificarCategoria->catNombre = $request['catNombre'];
        $ModificarCategoria->save();
        return redirect('/admin/admCategorias');
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
        $eliminarCategoria = Categoria::find($id);

        $eliminarCategoria->delete();

        return redirect("/admin/admCategorias");
    }
}
