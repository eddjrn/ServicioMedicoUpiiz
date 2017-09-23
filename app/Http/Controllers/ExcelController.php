<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Excel;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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

    public function exportUsers()
    {


        Excel::create('Lista_Registrados',function($excel){
           
             $excel->sheet('Alumnos',function($sheet){
             
                     $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->select('usuario.id as #','usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        
                        ->get();
                    $users = json_decode(json_encode($users),true);
             $sheet->fromArray($users);
        });
    })->export('xls');
    }

}
