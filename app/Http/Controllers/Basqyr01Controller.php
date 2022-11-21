<?php

namespace App\Http\Controllers;

use App\Models\basqyr01;
use App\Models\basest01;
use App\Models\bashis01;
use App\Models\auxcqr02 as QuejaRclamo;
use App\Models\auxdir02 as Direccion;
use App\Models\basurb01 as Urbanismo;
use App\Http\Requests\Storebasqyr01Request;
use App\Http\Requests\Updatebasqyr01Request;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\auxciu02 as Citizen;
use App\Events\LoggerDatabaseEvent;
use App\Notifications\WhatEverNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class Basqyr01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basqyr01 = basqyr01::paginate();

        return view('panel.basqyr01.index', compact('basqyr01'))
            ->with('i', (request()->input('page', 1) - 1) * $basqyr01->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $basest01 = basest01::all();
        $basqyr01 = new basqyr01();
        return view('panel.basqyr01.create', compact('basqyr01', 'basest01'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storebasqyr01Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate(basqyr01::$rules);
        $citizen = Citizen::where('cedula_ciudadano', $request->cedula_ciudadano)->first();
        $dateTime = Carbon::parse($request->fecha_incidente)->toDatetimeString();

        $planteamiento = $request->planteamiento;
        $request_queja = Str::upper($request->queja);
        $queja = QuejaRclamo::where('queja_reclamo', $request_queja)->first();
        $request_urbanismo = Str::upper($request->urbanismo);
        $parroquia = $request->parroquia_id;
        $urbanismo = Urbanismo::where('urbanismo', $request_urbanismo)->where('id_parroquia', $parroquia)->first();
        if (!$urbanismo) {
            $urbanismo = Urbanismo::create([
                'urbanismo' => $request_urbanismo,
                'id_parroquia' => $parroquia
            ]);
        }
        if (!$queja) {
            $queja = QuejaRclamo::create([
                'queja_reclamo' => $request_queja
            ]);
        }
        if (!$citizen) {

            $removeDateRequest = $request->except('fecha_incidente');
            $payload = Collect(array_merge($removeDateRequest, ['fecha_incidente' => $dateTime]));

            $payloadCitizen = $payload->only('nombre_ciudadano', 'apellido_ciudadano', 'cedula_ciudadano', 'correo_ciudadano', 'nacionalidad_ciudadano');
            $citizen =  Citizen::create($payloadCitizen->toArray());
        }

        $direccion =  Direccion::create([
            'id_ciudad' => $request->ciudad,
            'tipo_vivienda' => $request->tipo_vivienda,
            'id_urbanismo' => (int)$urbanismo->id_urbanismo,
            'nro_vivienda' => $request->numero_vivienda,
        ]);

        $qyr  = $citizen->qyr()->create([
            'direccion_id' => $direccion->id,
            'queja_id' => $queja->id,
            'planteamiento' => $planteamiento,
            'fecha_incidente' => $dateTime,
        ]);
        Notification::send(['test@test.com'], new WhatEverNotification());


        event(new LoggerDatabaseEvent($qyr, 'create'));



        return redirect()->route('admin.quejas.index')
            ->with('success', 'Queja y Reclamo guardada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\basqyr01  $basqyr01
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $basqyr01 = basqyr01::find($id);
        $basest01 = basest01::all();
       
       
        return view('panel.basqyr01.show', compact('basqyr01', 'basest01'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\basqyr01  $basqyr01
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $basest01 = basest01::all();
        $basqyr01 = basqyr01::find($id);
     
        return view('panel.basqyr01.edit', compact('basqyr01', 'basest01'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebasqyr01Request  $request
     * @param  \App\Models\basqyr01  $basqyr01
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, basqyr01 $queja)
    {

   //     request()->validate(basqyr01::$rules);

   $citizen = Citizen::where('cedula_ciudadano', $request->cedula_ciudadano)->first();
   $dateTime = Carbon::parse($request->fecha_incidente)->toDatetimeString();

   $planteamiento = $request->planteamiento;
   $request_queja = Str::upper($request->queja);
   $model_queja = QuejaRclamo::where('queja_reclamo', $request_queja)->first();
   $request_urbanismo = Str::upper($request->urbanismo);
   $parroquia = $request->parroquia_id;
   $urbanismo = Urbanismo::where('urbanismo', $request_urbanismo)->where('id_parroquia', $parroquia)->first();
   if (!$urbanismo) {
       $urbanismo = Urbanismo::create([
           'urbanismo' => $request_urbanismo,
           'id_parroquia' => $parroquia
       ]);
   }
   if (!$model_queja) {
       $model_queja = QuejaRclamo::create([
           'queja_reclamo' => $request_queja
       ]);
   }
   if (!$citizen) {

       $removeDateRequest = $request->except('fecha_incidente');
       $payload = Collect(array_merge($removeDateRequest, ['fecha_incidente' => $dateTime]));
       $payloadCitizen = $payload->only('nombre_ciudadano', 'apellido_ciudadano', 'cedula_ciudadano', 'correo_ciudadano', 'nacionalidad_ciudadano');
       $citizen =  Citizen::find($queja->citizen_id);
       $citizen->update($payloadCitizen->toArray());
   }

   $direccion =  Direccion::find($queja->direccion_id);
   $direccion->update([
    'id_ciudad' => $request->ciudad,
    'tipo_vivienda' => $request->tipo_vivienda,
    'id_urbanismo' => (int)$urbanismo->id_urbanismo,
    'nro_vivienda' => $request->numero_vivienda,
]);

   $qyr  = $citizen->qyr()->update([
       'direccion_id' => $direccion->id,
       'queja_id' => $model_queja->id,
       'planteamiento' => $planteamiento,
       'fecha_incidente' => $dateTime,
   ]);

    

   return redirect()->route('admin.quejas.index')
            ->with('success', 'Queja y Reclamo actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\basqyr01  $basqyr01
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $basqyr01 = basqyr01::find($id)->delete();

        return redirect()->route('admin.basqyr01.index')
            ->with('success', 'Queja y Reclamo eliminada satisfactoriamente');
    }
    public function search(Request $request)
    {
        $data = $request->data;
        $basqyr01 = Basqyr01::where("cedula", "like", "%$data%")->orWhere("name", "like", "%$data%")->paginate();

        return view('panel.basqyr01.index', compact('basqyr01'))
            ->with('i', (request()->input('page', 1) - 1) * $basqyr01->perPage());
    }
}
