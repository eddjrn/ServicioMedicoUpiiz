<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Hash;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = 1;
        $info=\App\info::all();
        $images=\App\images::all();
        $video=\App\video::all();
        return view('Admin.start', ['index'=>$index,'info'=> $info,'images'=> $images,'video'=> $video]);
    }
    
    public function lists()
    {
        $index = 2;
        
        $numbers = array(
            'One',
            'Two',
            'Three',
            'Four',
            'Five',
            'Six',
            'Seven',
            'Eight',
            'Nine',
            'Ten',
            'Eleven',
            'Twelve',
            'Thirteen',
            'Fourteen',
            'Fifteen',
            'Sixteen',
            'Seventeen',
            'Eighteen',
            'Nineteen',
            'Twenty',
            'TwentyOne',
            'TwentyTwo',
            'TwentyThree',
            'TwentyFour',
            'TwentyFive',
            'TwentySix',
            'TwentySeven',
            'TwentyEight',
            'TwentyNine',
        );
        
        $statusStyle = array(
            'form-control-blue-fill',
            'form-control-red-fill',
            'form-control-purple-fill',
            'form-control-orange-fill',
            'form-control-green-fill',
        );
        
        $carrers = \App\carrer::all();
        $status = \App\status::all();
        $studentAll = \App\student::all();
        $medicalDatas = \App\medicalData::all();
        
        
        return view('Admin.lists', ['index'=>$index, 'numbers'=>$numbers, 'statusStyle'=>$statusStyle, 'carrers'=>$carrers, 'status'=>$status, 'studentAll'=>$studentAll, 'medicalDatas'=>$medicalDatas]);
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $index = 0;
        
        $statusStyle = array(
            'form-control-blue-fill',
            'form-control-red-fill',
            'form-control-purple-fill',
            'form-control-orange-fill',
            'form-control-green-fill',
        );
        
        $student = \App\student::find($id);
        
        return view('Admin.student', ['index'=>$index, 'statusStyle'=>$statusStyle, 'student'=>$student]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $student = \App\student::find($id);
        $student->update([
            'documentacion'=>$request->documentacion,
            'estatus_id'=>$request->estatus,
        ]);
        
        return back();
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
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function addBlog(){
        $index = 3;
        
        return view('Admin.addBlog', ['index'=>$index]);
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function profile(){
        $index = -1;
        
        $user = Auth::user();
        
        return view('Admin.profile', ['index'=>$index, 'user'=>$user]);
    }
    
    public function profilePassword(Request $request){
        $this->validate($request, [
            'clave' => 'required',
        ]);
    
        if(Hash::check($request->clave, Auth::user()->password)){
            $index = -1;
            
            $edit = true;
            $user = Auth::user();
            
            return view('Admin.profile', ['index'=>$index, 'edit'=>$edit, 'user'=>$user]);
        } else{
            return redirect('/admin/profile')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas',
            ]);
        }
    }
    
    public function editProfile(Request $request){
        $this->validate($request, [
            'nombre' => 'required|min:3|max:50',
            'apellidoPaterno' => 'required|min:3|max:50',
            'apellidoMaterno' => 'required|min:3|max:50',
            'email' => 'required|email:min:5|max:50',
            'identificacion' => 'required|same:identificacion2|max:11|:min:5',
            'identificacion2' => 'required',
            'clave' => 'required|same:clave2|min:6|max:30',
            'clave2' => 'required',
        ]);
        
        $user = Auth::user();
        
        $user->update([
            'nombre' => $request->nombre,
            'apellidoPaterno' => $request->apellidoPaterno,
            'apellidoMaterno' => $request->apellidoMaterno,
            'email' => $request->email,
            'identificacion' => $request->identificacion,
            'password' => $request->clave,
        ]);
        
        session()->flash('message', 'Usuario '.$user. ' actualizado correctamente');
        session()->flash('type', 'success');
        
        return redirect('/admin/profile');
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function configIndex(){
        $index = -1;
        
        $students = \App\student::all();
        $carrer = \App\carrer::all();
        $clinics = \App\clinic::all();
        $state = \App\state::all();
        $institution = \App\medicalInstitute::all();
        $place = \App\place::all();
        $medicalDatas = \App\medicalData::all();
        $status = \App\status::all();
        
    
        return view('Admin.config', [
            'index'=>$index,
            'students'=>$students,
            'carrer'=>$carrer,
            'clinics'=>$clinics,
            'state'=>$state,
            'institution'=>$institution,
            'place'=>$place,
            'medicalDatas'=>$medicalDatas,
            'status'=>$status,
        ]);
    }
    
    public function checkPassword(Request $request, $variable){
        $this->validate($request, [
            'clave' => 'required',
        ]);
        
        if(Hash::check($request->clave, Auth::user()->password)){
            return redirect('/admin/config/insert/'.$variable);
        } else{
            return redirect('/admin/config')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas',
            ]);
        }
    }
    
    public function getRegisterWindow($variable){
        $index = -1;
            
        return view('Admin.dialogBox', ['index'=>$index, 'variable'=>$variable]);
    }
    
    public function insertRegister(Request $request, $variable){
        $this->validate($request, [
            'nombre' => 'required|min:5|max:255',
        ]);

    
        if($variable == 1){
           \App\carrer::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 2){
            \App\state::create([
                'nombre' => $request->nombre,
            ]);
        }
            
        return redirect('/admin/config/insert/'. $variable);
    }
    
    public function updateRegister(Request $request, $variable){
        $this->validate($request, [
            'nombre' => 'required',
        ]);
    
        if($variable == 1){
            $carrer = \App\carrer::find($request->idVal);
            $carrer->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 2){
            $state = \App\state::find($request->idVal);
            $state->update([
                'nombre' => $request->nombre,
            ]);
        }
        
        return redirect('/admin/config/insert/'. $variable);
    }
    
    public function deleteRegister(Request $request, $variable){
        if($variable == 1){
            $carrer = \App\carrer::find($request->idVal2);
            $carrer->delete();
        } elseif($variable == 2){
            $state = \App\state::find($request->idVal2);
            $state->delete();
        }
        
        return redirect('/admin/config/insert/'. $variable);
    }
}
