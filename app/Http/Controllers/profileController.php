<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\student;
use App\medicalData;

use Carbon\Carbon;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    {   
        $index = 0;
        
        $student = Auth::user()->student;
        session()->flash('message', 'Documentación: '.$student->documentation());
        $id = $student->documentacion;
        
        if($id == 5){
            session()->flash('type', 'info');
        } else if($id == 2){
            session()->flash('type', 'danger');
        } else if($id == 3){
            session()->flash('type', 'grey-darker');
        } else if($id == 4){
            session()->flash('type', 'warning');
        } else if($id == 1){
            session()->flash('type', 'success');
        }
        
        $statusStyle = array(
            'form-control-blue-fill',
            'form-control-red-fill',
            'form-control-purple-fill',
            'form-control-orange-fill',
            'form-control-green-fill',
        );
        
        return view('User.profile', ['index'=>$index, 'student'=>$student, 'statusStyle'=>$statusStyle]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \App\user::find($request->studentId);
        $user->update([
            'nombre'=>$request->nombre,
            'apellidoPaterno'=>$request->apellidoPaterno,
            'apellidoMaterno'=>$request->apellidoMaterno,
            'email'=>$request->email,
            'identificacion'=>$request->identificacion,
        ]);
        
        $student = $user->student;
        $student->update([
            'carrera_id'=>$request->carrera,
            'municipio_id'=>$request->municipio,
            'estado_id'=>$request->estado,
            'sexo'=>$request->sexo,
            'telefono'=>$request->telefono,
            'turno'=>$request->turno,
            'calle'=>$request->calle,
            'numExterior'=>$request->numExterior,
            'numInterior'=>$request->numInterior,
            'colonia'=>$request->colonia,
            'codigoPostal'=>$request->codigoPostal,
            'localidad'=>$request->localidad,
            'curp'=>$request->curp,
            'fechaNacimiento'=>$request->nacimiento,
            'tutor'=>$request->tutor,
            'telefonoTutor'=>$request->telefonoTutor,
            'celularTutor'=>$request->celularTutor,
            'parentescoTutor'=>$request->parentesco,
        ]);
        
        $medicalData = $user->medicalData;
        $medicalData->update([
            'numSeguro'=>$request->numSeguro,
            'proveedorSeguro'=>$request->proveedorSeguro,
            'clinica_id'=>$request->numClinica,
            'institucionSeguro_id'=>$request->institucionClinica,
            'tipoSangre'=>$request->sangre,
        ]);
        
        return redirect('/profile');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $index = 0;
        
        $student = Auth::user()->student;
        session()->flash('message', 'Documentación: '.$student->documentation());
        $id = $student->documentacion;
        
        if($id == 5){
            session()->flash('type', 'info');
        } else if($id == 2){
            session()->flash('type', 'danger');
        } else if($id == 3){
            session()->flash('type', 'grey-darker');
        } else if($id == 4){
            session()->flash('type', 'warning');
        } else if($id == 1){
            session()->flash('type', 'success');
        }
        
        return view('User.editProfile', ['index'=>$index, 'student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->student){
            session()->flash('message', '¡Bienvenido!');
            session()->flash('type', 'success');

            return redirect('/');
        } else{
            $index = 4;
            return view('User.completeProfile', ['index'=>$index]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'telefono'=>'required',
            'curp'=>'required|unique:alumno,curp',
            'sexo'=>'required|not_in:0',
            'nacimiento'=>'required|date|before:tomorrow',
            'tutor'=>'required',
            'telefonoTutor'=>'required',
            'celularTutor'=>'required',
            'parentesco'=>'required',
            
            'numSeguro'=>'required',
            'proveedorSeguro'=>'required',
            'institucionClinica'=>'required',
            'numClinica'=>'required',
            'sangre'=>'required',
            
            'municipio'=>'required',
            'estado'=>'required',
            'localidad'=>'required',
            'cp'=>'required',
            'calle'=>'required',
            'colonia'=>'required',
            'numExt'=>'required',
            'numInt'=>'required',
            
            'carrera'=>'required',
            'turno'=>'required',
        ]);
        
       // $input = 'd-m-Y';
       // $date = $request->input('nacimiento');
        //$output = 'Y-m-d';
        
       // $dateFormated = Carbon::createFromFormat($input, $date)->format($output);
        //return $dateFormated;
        
        if(Auth::user()->student){
            return redirect('/')->withErrors([
                'El alumno ya existe en la base de datos',
            ]);
        } else{
            student::create([
                'usuario_id'=>Auth::user()->id,
                'carrera_id'=>$request->carrera,
                'municipio_id'=>$request->municipio,
                'estado_id'=>$request->estado,
                'sexo'=>$request->sexo,
                'documentacion'=>'2',
                'turno'=>$request->turno,
                'telefono'=>$request->telefono,
                'calle'=>$request->calle,
                'numExterior'=>$request->numExt,
                'numInterior'=>$request->numInt,
                'colonia'=>$request->colonia,
                'codigoPostal'=>$request->cp,
                'localidad'=>$request->localidad,
                'curp'=>$request->curp,
                'fechaNacimiento'=>$request->nacimiento,
                'tutor'=>$request->tutor,
                'telefonoTutor'=>$request->telefonoTutor,
                'celularTutor'=>$request->celularTutor,
                'parentescoTutor'=>$request->parentesco,
                'estatus_id'=>'1',
            ]);
            
            medicalData::create([
                'usuario_id'=>Auth::user()->id,
                'numSeguro'=>$request->numSeguro,
                'proveedorSeguro'=>$request->proveedorSeguro,
                'clinica_id'=>$request->numClinica,
                'institucionSeguro_id'=>$request->institucionClinica,
                'tipoSangre'=>$request->sangre,
            ]);
            
            session()->flash('message', '¡Bienvenido! - Nuevo usuario');
            session()->flash('type', 'success');
            return redirect('/');
        }
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
