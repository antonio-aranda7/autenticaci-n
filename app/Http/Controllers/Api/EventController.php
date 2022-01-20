<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\Jsonrequest;
use Illuminate\Support\Facade\DB;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // sirve para lista todo lo que tiene en un modelo o tobla
    public function index()
    {
        //query que Devuleve todos los registros del modelo Event
        $eventos = Event::all();

        // Como Regresa una  respuesta http de arreglo asociativo llave valor 
        return response()->json(['eventos'=>$eventos], 201, 
            ['Content-Type'=> 'application/json']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Sirve para hacer una creación de un registro y podemos consultarle el body
    public function store(Request $request)
    {
        //Agregar un nuevo registro
        if ($request->isJson()) { //Si es json la solicitud
            $nuevoEvt = new Event(); //Crea un nuevo objeto tipo Event y recibe los paramatres
            $nuevoEvt->nombre = $request->input('nombre'); //"IX Concurso de programción"
            $nuevoEvt->descripcion = $request->input('descripcion'); //"Concurso de programación anual del I.T. Chetumal";
            $nuevoEvt->save();

            return response()->json(['mensaje'=>'creación de evento exitoso'], 201);
        }
        else
            return response()->json(['mensaje'=>'Datos en formato incorrecto'], 404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    //Para mostrar un registro que el que se mostraras sera el de id
    public function show($id)
    {
        //$ev = Event::find($id);
        //use Illuminate\Support\Facade\DB;
        $ev = DB::table('events')->find($id);
        return response()->json(['evento'=>$ev]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        //
        return response()->json(['mensaje'=>'Llamaste a Update'], 201);
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
    }
}
