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

    public function exportUsers()
    {


        Excel::create('Lista_Por_Carrera',function($excel){
           
             $excel->sheet('SistemasComputacionales',function($sheet){
             
                     $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->join('datosMedicos','datosMedicos.usuario_id','=','usuario.id')
                        ->select('usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','usuario.identificacion as Boleta','alumno.curp as CURP','datosMedicos.numSeguro as NSS','alumno.telefono as Telefono','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        ->where('carrera.id','=',1)  
                        ->OrderBy('usuario.apellidoPaterno')      
                        ->get();
                    $users = json_decode(json_encode($users),true);
            $sheet->cells('A1:H1', function($cells) {
            /*modifica fila*/
            $cells->setBackground('#8A0829');
            $cells->setFontColor('#ffffff');
        });
             $sheet->fromArray($users);
        });
             $excel->sheet('Mecatronica',function($sheet){
             
                     $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->join('datosMedicos','datosMedicos.usuario_id','=','usuario.id')
                        ->select('usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','usuario.identificacion as Boleta','alumno.curp as CURP','datosMedicos.numSeguro as NSS','alumno.telefono as Telefono','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        ->where('carrera.id','=',2)  
                        ->OrderBy('usuario.apellidoPaterno')      
                        ->get();
                    $users = json_decode(json_encode($users),true);
            $sheet->cells('A1:H1', function($cells) {
            /*modifica fila*/
            $cells->setBackground('#8A0829');
            $cells->setFontColor('#ffffff');
        });
             $sheet->fromArray($users);
        });
             $excel->sheet('Alimentos',function($sheet){
             
                    $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->join('datosMedicos','datosMedicos.usuario_id','=','usuario.id')
                        ->select('usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','usuario.identificacion as Boleta','alumno.curp as CURP','datosMedicos.numSeguro as NSS','alumno.telefono as Telefono','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        ->where('carrera.id','=',3)  
                        ->OrderBy('usuario.apellidoPaterno')      
                        ->get();
                    $users = json_decode(json_encode($users),true);
            $sheet->cells('A1:H1', function($cells) {
            /*modifica fila*/
            $cells->setBackground('#8A0829');
            $cells->setFontColor('#ffffff');
        });
             $sheet->fromArray($users);
        });

             $excel->sheet('Metalurgica',function($sheet){
             
                     $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->join('datosMedicos','datosMedicos.usuario_id','=','usuario.id')
                        ->select('usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','usuario.identificacion as Boleta','alumno.curp as CURP','datosMedicos.numSeguro as NSS','alumno.telefono as Telefono','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        ->where('carrera.id','=',4)  
                        ->OrderBy('usuario.apellidoPaterno')      
                        ->get();
                    $users = json_decode(json_encode($users),true);
            $sheet->cells('A1:H1', function($cells) {
            /*modifica fila*/
            $cells->setBackground('#8A0829');
            $cells->setFontColor('#ffffff');
        });

             $sheet->fromArray($users);
        });
             $excel->sheet('Ambiental',function($sheet){
             
                     $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->join('datosMedicos','datosMedicos.usuario_id','=','usuario.id')
                        ->select('usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','usuario.identificacion as Boleta','alumno.curp as CURP','datosMedicos.numSeguro as NSS','alumno.telefono as Telefono','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        ->where('carrera.id','=',5)  
                        ->OrderBy('usuario.apellidoPaterno')      
                        ->get();
                    $users = json_decode(json_encode($users),true);
            $sheet->cells('A1:H1', function($cells) {
            /*modifica fila*/
            $cells->setBackground('#8A0829');
            $cells->setFontColor('#ffffff');
        });
             $sheet->fromArray($users);
        });
    })->export('xls');
    }

    public function All(){

         Excel::create('Lista_Todos_Registrados',function($excel){

        $excel->sheet('Registrados',function($sheet){
             
                    $users = DB::table('usuario')
                        ->join('alumno','alumno.usuario_id','=','usuario.id')
                        ->join('carrera','carrera.id','=','alumno.carrera_id')
                        ->join('datosMedicos','datosMedicos.usuario_id','=','usuario.id')
                        ->select('usuario.apellidoPaterno as A.Paterno','usuario.apellidoMaterno as A.Materno','usuario.nombre as Nombre','usuario.identificacion as Boleta','alumno.curp as CURP','datosMedicos.numSeguro as NSS','alumno.telefono as Telefono','carrera.nombre as Carrera')
                        ->where('usuario.tipo','=',2)
                        ->OrderBy('carrera.nombre')      
                        ->get();
                    $users = json_decode(json_encode($users),true);
        
        $sheet->cells('A1:H1', function($cells) {
            /*modifica fila*/
            $cells->setBackground('#8A0829');
            $cells->setFontColor('#ffffff');
        });
             
              $sheet->fromArray($users);
        });
    })->export('xls');
    } 

}
