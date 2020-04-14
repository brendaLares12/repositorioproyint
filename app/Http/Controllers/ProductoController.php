<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;


class ProductoController extends Controller {


        public function directory() {
            $productos = Producto::all();
            return view("crearProducto", compact("productos"));
        }

            public function  create() {
                $categorias = Categoria::all();
                return view('crearProducto', compact('categorias'));
            }



            public function store(Request $form) {
            //dd($form->all());
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

                        return redirect('/producto/crear')->with(compact('producto'));
        }


                public function show($id) {
                  $producto = Producto::find($id);
                   return view('producto', compact('producto'));
              }

        public function edit($id) {
          $producto = Producto::find($id);
           return view('editarProducto', compact("producto"));
      }


        public function update(Request $form) {
         $producto = Producto::find($form["id"]);
          $producto->nombre = $form["nombre"];
          $producto->descripcion = $form["descripcion"];
          $producto->precio = $form["precio"];

           $producto->save();
         return redirect('/producto/{id}')->with(compact("producto"));
       }

                  public function destroy(Request $form) {
                     $producto = Actor::find($form['id']);
                     $producto->delete();
                    return redirect('/producto');
        }




}
