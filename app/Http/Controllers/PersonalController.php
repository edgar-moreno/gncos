<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infos = DB::table('personales')->get();
        return view('supervisor.index', compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supervisor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
         'Documento'=>'required|string',
         'Nombres'=>'required|string',
         'Apellidos'=>'required|string',
         'FechaNacimiento'=>'required|string',
         'TelContacto'=>'required|string',
         'Direccion'=>'required|string',
         'Barrio'=>'required|string',
         'Localidad'=>'required|string',
         'FechaIngreso'=>'required|string',
         'Campaña'=>'required|string',
         'Gerencia'=>'required|string',
         'Supervisor'=>'required|string'
        ]);

        DB::table('personales')->insert([
         'Documento'=>$request->Documento,
         'Nombres'=>$request->Nombres,
         'Apellidos'=>$request->Apellidos,
         'FechaNacimiento'=>$request->FechaNacimiento,
         'TelContacto'=>$request->TelContacto,
         'Direccion'=>$request->Direccion,
         'Barrio'=>$request->Barrio,
         'Localidad'=>$request->Localidad,
         'FechaIngreso'=>$request->FechaIngreso,
         'Campaña'=>$request->Campaña,
         'Gerencia'=>$request->Gerencia,
         'Supervisor'=>$request->Supervisor,
         'created_at'=>now(),
         'updated_at'=>now()
        ]);
        return back()->with('status', 'Creado con exito');
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
        $info = DB::table('personales')->where('id', $id)->first();
        return view('supervisor.edit', compact('info'));
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
        //colocar validaciones
          $request->validate([
         'Documento'=>'required|string',
         'Nombres'=>'required|string',
         'Apellidos'=>'required|string',
         'FechaNacimiento'=>'required|string',
         'TelContacto'=>'required|string',
         'Direccion'=>'required|string',
         'Barrio'=>'required|string',
         'Localidad'=>'required|string',
         'FechaIngreso'=>'required|string',
         'Campaña'=>'required|string',
         'Gerencia'=>'required|string',
         'Supervisor'=>'required|string'
        ]);

        DB::table('personales')->where('id', $id)->update($request->only('Documento', 'Nombres','Apellidos','FechaNacimiento','TelContacto','Direccion','Barrio','Localidad','FechaIngreso','Campaña','Gerencia','Supervisor'));
        return back()->with('status', 'Editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('personales')->where('id', $id)->delete();
        return back()->with('status', 'Eliminado con exito');
    }
}
