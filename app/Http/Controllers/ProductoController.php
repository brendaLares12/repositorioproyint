<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use Illuminate\Http\Request;


class ProductoController extends Controller {

      //Muestra listado de productos
        public function directory() {
            $productos = Producto::paginate(6);
            $categorias = Categoria::all();
            return view('listadoProductos', compact('productos', 'categorias'));
        }

        //Crea producto
            public function  create() {
                $categorias = Categoria::all();
                return view('crearProducto', compact('categorias'));
            }

        //Guarda producto creado
            public function store(Request $form) {
            //dd($form->all());
                $reglas = [
                    'nombre' => 'required|string',
                    'imagen' => 'required|file',
                    'descripcion' =>'required|string|max:100',
                    'precio' => 'required|integer',
                    'stock' => 'required|integer',
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
                        $producto->stock = $form['stock'];
                        $producto->categoria_id = $form['categoria_id'];

                        $producto->save();

                        return redirect('/producto/crear')->with(compact('producto'));
        }

        //Muestra  detalle de producto
                public function show($id) {
                  $producto = Producto::find($id);
                   return view('detalleProducto', compact('producto'));
              }

        //Muestra la vista de literatura universal
              public function litUniversal() {
                $productos = Producto::where('id', '>=', '20', 'and', 'id', '<=', '22')->get();
                 return view('literaturaUniversal', compact('productos'));
            }

        //Modifica producto      
                public function edit($id) {
                  $producto = Producto::find($id);
                  $categorias = Categoria::all();
                  return view('editarProducto', compact('producto', 'categorias'));
              }
        //Guarda modificación de producto
                 public function update(Request $form) {
                  $producto = Producto::find($form["id"]);
                  $producto->nombre = $form["nombre"];
                  $producto->imagen = $form["imagen"];
                  $producto->descripcion = $form["descripcion"];
                  $producto->categoria_id = $form["categoria_id"];
                  $producto->precio = $form["precio"];
                  $producto->stock = $form["stock"];

                  $producto->save();
                return redirect('/producto/{id}')->with(compact("producto"));
               }

        //Elimina producto
                  public function destroy($id) {
                     $producto = Producto::find($id);
                     $producto->delete();
                    return redirect('/productos');
        }




}
