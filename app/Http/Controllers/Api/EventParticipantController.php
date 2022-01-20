<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventParticipant;
use Illuminate\Http\Request;
use Illuminate\Http\Jsonrequest;
use Illuminate\Support\Facades\DB;

class EventParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Get
    {
        $event_participant = EventParticipant::all();

        return response()->json(['event_participant'=>$event_participant], 201,
            ["Content-Type"=>"application/json"]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) //Post
    {
        //Agregar un nuevo registro
        if ($request->isJson()) {
            $nuevoEvtPtp = new EventParticipant();
            $nuevoEvtPtp->event_id = $request->input('event_id');
            $nuevoEvtPtp->participant_id = $request->input('participant_id'); 
            $nuevoEvtPtp->save();

            return response()->json(['mensaje'=>'creación de evento_participante exitoso'], 201);
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
    public function show($id) //Get {id}
    {
        //$ev = EventParticipant::find($id);
        $ev = DB::table('event_participant')->find($id);
        return response()->json(['evento_participante'=>$ev]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id) //Put {id}
    {
        if ($request->isJson()) {
            $updateEvtPtp = EventParticipant::find($id);
            $updateEvtPtp->event_id = $request->input('event_id');
            $updateEvtPtp->participant_id = $request->input('participant_id'); 
            $updateEvtPtp->update();

            return response()->json(['mensaje'=>'Modificación de evento_participante exitoso'], 201);
        }
        else
            return response()->json(['mensaje'=>'Datos en formato incorrecto'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $evpr = EventParticipant::find($id);
        $evpr->delete();
        return response()->json(['mensaje'=>'Evento eliminado'], 201);      
    }
}
