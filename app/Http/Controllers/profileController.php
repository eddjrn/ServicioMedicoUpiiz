<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $index = 6;
        
        $student = Auth::user()->student;
        session()->flash('message', $student->status->nombre);
        $id = $student->status->id;
        $inputStatus = 'form-control-blue-fill'; //input type text style
        
        if($id == 1){
            session()->flash('type', 'warning');
            $inputStatus = 'form-control-orange-fill';
        } else if($id == 2){
            session()->flash('type', 'danger');
            $inputStatus = 'form-control-red-fill';
        } else if($id == 3){
            session()->flash('type', 'success');
            $inputStatus = 'form-control-green-fill';
        } else if($id == 4){
            session()->flash('type', 'info');
            $inputStatus = 'form-control-blue-fill';
        } else if($id == 5){
            session()->flash('type', 'grey-darker');
            $inputStatus = 'form-control-danger';
        }
        
        return view('User.profile', ['index'=>$index, 'student'=>$student, 'inputStatus'=>$inputStatus]);
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
            'apellidoPa'=>$request->apellidoPa,
            'apellidoMa'=>$request->apellidoMa,
            'email'=>$request->email,
            'boleta'=>$request->boleta,
        ]);
        
        $student = $user->student;
        $student->update([
            'carrera_id'=>$request->carrera,
            'municipio_id'=>$request->municipio,
            'estado_id'=>$request->estado,
            'noSeguro'=>$request->noSeguro,
            'sexo'=>$request->sexo,
            'telefono'=>$request->telefono,
            'calle'=>$request->calle,
            'numExt'=>$request->numExt,
            'numInt'=>$request->numInt,
            'colonia'=>$request->colonia,
            'cp'=>$request->cp,
            'localidad'=>$request->localidad,
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
        $index = 6;
        
        $student = Auth::user()->student;
        session()->flash('message', $student->status->nombre);
        $id = $student->status->id;
        
        if($id == 1){
            session()->flash('type', 'warning');
        } else if($id == 2){
            session()->flash('type', 'danger');
        } else if($id == 3){
            session()->flash('type', 'success');
        } else if($id == 4){
            session()->flash('type', 'info');
        } else if($id == 5){
            session()->flash('type', 'grey-darker');
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
