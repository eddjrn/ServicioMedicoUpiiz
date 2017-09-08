<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class forgetPassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $index=-2;
         return view('forget.forgetPass', ['index'=>$index]);
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

    public function search(){
        $index = -4;
        
        return view('forget.forgetPass', ['index'=>$index]);
    }

     public function getSearch(Request $request){
        $index = -4;
        
        switch($request->opc){
            
            
            case 2:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
                
                $user = \App\user::where('identificacion', $request->busqueda)->where('tipo', 2)->get();
                
                if(count($user) == 0){
                    session()->flash('message', 'No se encontró ningun registro con la boleta: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('forget.forgetPass', ['index'=>$index, 'user'=>$user]);
            break;
           
        }
    }

    public function showInf($id)
    {
        $index = -5;
        
        $student = \App\student::find($id);
        
        return view('forget.questionPass', ['index'=>$index, 'student'=>$student]);
    }

     public function update2(Request $request)
    {
        $index = 4;
        $this->validate($request, [
           
            'clave' => 'required|same:clave2',
            'clave2' => 'required',
        ]);
        
        
        $student = \App\student::find($request->studentId);

        return view('forget.changePass',['index'=>$index,'student'=>$student]);
    }

    public function update3(Request $request)
    {
        $this->validate($request, [
           
            'clave' => 'required|same:clave2|min:6|max:30',
            'clave2' => 'required',
        ]);
        
        $user = \App\user::find($request->studentId);
        $user->update([
            'password'=>$request->clave,
        ]);

        return redirect('/login');
    }


}
