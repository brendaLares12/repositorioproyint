<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;


class CategoriaController extends Controller{
     //Crea categoria
     public function  create() {
        $categorias = Categoria::all();
        return view('crearCategoria', compact('categorias'));
    }

//Guarda categoria creada
    public function store(Request $form) {
        $reglas = [
            'nombre' => 'required|string'
            ];

        $errors = [
            'required' => 'El campo :attribute es requerido',
            'string' => 'El campo :attribute debe ser un texto'
        ];

        $this->validate($form, $reglas, $errors);

                $categoria = new Categoria();
                $categoria->nombre = $form['nombre'];
                $categoria->save();

                return redirect('/categoria/crear')->with(compact('categoria'));
        }

                        //Modifica categoria      
                        public function edit($id) {
                            $categoria = Categoria::find($id);
                            return view('editarCategoria', compact('categoria'));
                        }


                        //Guarda modificación de categoria
                        public function update(Request $form) {
                            $categoria = Producto::find($form["id"]);
                            $categoria->nombre = $form["nombre"];
                            
                            $categoria->save();
                        return redirect('/categoria/{id}')->with(compact("categoria"));
                        }


                        /////////////////// C-R-U-D  C-A-T-E-G-O-R-I-A-S ///////////////////
                        public function crudCategorias() {
                            $categorias = Categoria::all();
                            return view('crud-categorias', compact('categorias'));
                        }

                         //Elimina categoria
                         public function destroy($id) {
                            $categoria = Categoria::find($id);
                            $categoria->delete();
                            return redirect('/crud-categorias');     
                        }

}
