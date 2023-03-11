<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        $datos = Personas::orderBy('paterno','desc')->paginate(2);
        return view('welcome', compact('datos'));

        //pagina de inicio
    }


    public function create()
    {
        //formulario donde agregamos datos
        return view('agregar');

        return 'aqui puedes agregar';
    }


    public function store(Request $request)
    {
        //sirve para guardar datos bd
        $personas = new personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();


        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }


    public function show($id)
    {
        //obtener registro de nuestra tabla
        $personas= Personas::find($id);
        return view("eliminar",compact('personas'));
    }


    public function edit($id)
    {
        //nos sirve para traer los datos que se van a editar
        //y se colocan en un formulario
        $personas = Personas::find($id);
        return view("actualizar", compact('personas'));
    }

    public function update(Request $request, $id)
    {
        //actualiza datos en la db
        $personas= Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();


        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");

    }


    public function destroy($id)
    {
        //elimina un registro

       $personas= Personas::find($id);
       $personas->delete();
       return redirect()->route("personas.index")->with("success", "Eliminado con exito!");

    }
}
