<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;


class ProductoController extends Controller {


        public function index() {
            $productos = Producto::all();
            return view("listadoPapeleria", compact('productos'));
        }

                public function directory() {
                    return view('crearProducto');
                }

            public function  create() {
                $categorias = Categoria::all();
                return view('crearProducto', compact('categorias'));
            }



            public function store(Request $form) {
            dd($form->all());
                $reglas = [
                    'nombre' => 'required|string',
                    'imagen' => 'required|file',
                    'descripcion' =>'required|string|max:100',
                    'precio' => 'required|integer',
                    'categoria_id' => 'required|integer'
                    ];

                $errors = [
                    'required' => 'El campo :attribute es requerido',
                    'string' => 'El campo :attribute debe ser un texto',
                    'max' => 'El campo :attribute tiene mas :max letras',
                    'integer' => 'El campo :attribute debe ser un numero entero'
                ];

                $this->validate($form, $reglas, $errors);

                        $producto = new Producto();


                        $ruta = $form->file('imagen')->store('public');

                        $nombreImagen = basename($ruta);

                        $producto->imagen = $nombreImagen;
                        $producto->nombre = $form['nombre'];
                        $producto->descripcion = $form['descripcion'];
                        $producto->precio = $form['precio'];
                        $producto->categoria_id = $form['categoria_id'];

                        $producto->save();

                        return redirect('/listado-papeleria')->with(compact('producto'));
        }


}
