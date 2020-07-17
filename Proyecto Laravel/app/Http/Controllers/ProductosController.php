<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Marca;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

// Use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $productos = Producto::paginate(10);
        return view('admin/admProductos', ['productos' => $productos]);
    }

    public function listar() {
        $productos = Producto::paginate(10);
        $categorias = Categoria::all();
        $marcas = Marca::all();
        return view('productos',['productos' => $productos, 'categorias' =>$categorias,'marcas' =>$marcas] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    // public function create($id)
    { {
            //
            $marcas = Marca::all();
            $categorias = Categoria::all();
            return view(
                '/admin/formAgregarProducto',
                [
                    'marcas' => $marcas,
                    'categorias' => $categorias
                ]
            );
        }
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
            "prdNombre" => "string|min:3|unique:productos,prdNombre|required",
            "prdPrecio" => "Integer|min:0|required",
            "idMarca" => "required",
            "idCategoria" => "required",
            "prdPresentacion"=> "required|String|max:200",
            "prdStock" => "Integer|min:1|required"

        ];

        $mensajes = [
            "String" => "el campo :attribute debe contener letras",
            "Integer"=> "El campo :attribute solo contiene numeros",
            "min"=> "el campo :attribute debe tener minimo :min",
            "max"=> "el campo :attribute debe tener minimo :max caracteres",
            "unique"=> "el campo :attribute con el nombre que ingreso ya existe",
            "required"=> "El campo :attribute no puede estar en vacio"
        ];

        $atributos =  [

            "prdNombre" => "nombre",
            "prdPrecio" => "precio",
            "idMarca" => "marca",
            "idCategoria" => "categoria",
            "prdPresentacion"=> "presentacion",
            "prdStock" => "stock"
        ];



         $this->validate($request,$reglas, $mensajes,$atributos);

        $productoNuevo = new Producto();

        $imageName = 'noDisponible.jpg';
        if ($request->file('prdImagen')) {
            //$imageName = time().'.'.request()->prdImagen->getClientOriginalExtension();
            // $imagen = $request->file('prdImagen');
            //$imagen->getClientOriginalExtension();
            $imageName = $request->prdImagen->getClientOriginalName();
            $request->prdImagen->move(public_path('images/productos'), $imageName);
        }

        $productoNuevo->prdNombre = $request['prdNombre'];
        $productoNuevo->prdPrecio = $request['prdPrecio'];
        $productoNuevo->idMarca = $request['idMarca'];
        $productoNuevo->idCategoria = $request['idCategoria'];
        $productoNuevo->prdPresentacion = $request['prdPresentacion'];
        $productoNuevo->prdStock = $request['prdStock'];
        $productoNuevo->prdImagen = $imageName;
        $productoNuevo->save();

        return redirect("/admin/admProductos");
    }






    //VALIDACION
    //$reglas=[
    //"nombredelinput"=>"string"|min:3|unique:movies,title",
    //"Nombredelotroinput"=>"date";
    //];
    //mensajes=[
    //"nombredelinput"=>"El campor :atribute debe ser texto",
    //"Nombredelotroinput"=>"El campo :atribute debe ser una fecha";
    //];
    //$this->validate($request,$reglas,$mensajes);

    //VISTA
    //@foreach($errores->all() as $error)
    //<input value={{old("nombredelinput")}}  />

    //AGREGAR
    //productoNuevo = new Producto;

    // 	$productoNuevo->nomDeLaColEnLaBD = $req['nombredelinput'];
    // 	$productoNuevo->nomDeLaColEnLaBD = $req['Nombredelotroinput'];

    // 	$productoNuevo->save();
    // return redirect("/productos");


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
    { {
            $producto = Producto::find($id);
            $marcas = Marca::all();
            $categorias = Categoria::all();
            return view(
                '/admin/admEditarProducto',
                [
                    'marcas' => $marcas,
                    'categorias' => $categorias,
                    'producto' => $producto
                ]
            );
        }
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
            "prdNombre" => "string|min:3||required",
            "prdPrecio" => "Integer|min:0|required",
            "idMarca" => "required",
            "idCategoria" => "required",
            "prdPresentacion"=> "required|String|max:200",
            "prdStock" => "Integer|min:1|required"

        ];

        $mensajes = [
            "String" => "el campo :attribute debe contener letras",
            "Integer"=> "El campo :attribute solo contiene numeros",
            "min"=> "el campo :attribute debe tener minimo :min",
            "max"=> "el campo :attribute debe tener minimo :max caracteres",
            "unique"=> "el campo :attribute con el nombre que ingreso ya existe",
            "required"=> "El campo :attribute no puede estar en vacio"
        ];

        $atributos =  [

            "prdNombre" => "nombre",
            "prdPrecio" => "precio",
            "idMarca" => "marca",
            "idCategoria" => "categoria",
            "prdPresentacion"=> "presentacion",
            "prdStock" => "stock"
        ];



         $this->validate($request,$reglas, $mensajes,$atributos);

        $productoNuevo = Producto::find($id);


        if ($request->file('prdImagen')) {
            //$imageName = time().'.'.request()->prdImagen->getClientOriginalExtension();
            // $imagen = $request->file('prdImagen');
            //$imagen->getClientOriginalExtension();
            $imageName = $request->prdImagen->getClientOriginalName();
            $request->prdImagen->move(public_path('images/productos'), $imageName);
        }
        else {
            $imageName = 'noDisponible.jpg';
            if(isset($_POST['original'])){
                $imageName = $_POST['original'];
            }
        }

        $productoNuevo->prdNombre = $request['prdNombre'];
        $productoNuevo->prdPrecio = $request['prdPrecio'];
        $productoNuevo->idMarca = $request['idMarca'];
        $productoNuevo->idCategoria = $request['idCategoria'];
        $productoNuevo->prdPresentacion = $request['prdPresentacion'];
        $productoNuevo->prdStock = $request['prdStock'];
        $productoNuevo->prdImagen = $imageName;

        $productoNuevo->save();

        return redirect("/admin/admProductos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $productoNuevo = Producto::find($id);



        $productoNuevo->delete();

        return redirect("/admin/admProductos");

        //El formulario se le agrega el {{csrf_field()}}
        // y tambien un input de hidden
        // <input type="hidden" name="id" value={{$producto->$id}}/>
        // submit**

        //en el metodo llega como parametro el tipo Request
        //public function destroy(Request $datosDormulario){
        // $id = $datosDormulario['id];
        // $producto = Producto::find($id);
        // $producto->delete();
        // return redirect("/productos");

        //}

    }
}
