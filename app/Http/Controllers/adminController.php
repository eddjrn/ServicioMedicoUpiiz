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
    
    public function search(){
        $index = 4;
        
        return view('Admin.search', ['index'=>$index]);
    }
    
    public function getSearch(Request $request){
        $index = 4;
        
        switch($request->opc){
            case 1:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
            
                $user = \App\user::search($request->busqueda)->where('tipo', 2)->get();
                
                if(count($user) == 0){
                    session()->flash('message', 'No se encontró ningun registro con: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('Admin.search', ['index'=>$index, 'user'=>$user]);
            break;
            
            case 2:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
                
                $user = \App\user::where('identificacion', $request->busqueda)->where('tipo', 2)->get();
                
                if(count($user) == 0){
                    session()->flash('message', 'No se encontró ningun registro con la boleta: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('Admin.search', ['index'=>$index, 'user'=>$user]);
            break;
            
            case 3:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
                
                $medicalData = \App\medicalData::where('numSeguro', 'like', $request->busqueda)->get();
                
                if(count($medicalData) == 0){
                    session()->flash('message', 'No se encontró ningun registro con número: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('Admin.search', ['index'=>$index, 'medicalData'=>$medicalData]);
            break;
            
            case 4:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
                
                $user = \App\user::where('email', $request->busqueda)->where('tipo', 2)->get();
                
                if(count($user) == 0){
                    session()->flash('message', 'No se encontró ningun registro con el correo: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('Admin.search', ['index'=>$index, 'user'=>$user]);
            break;
            
            case 5:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
                
                $medicalData = \App\medicalData::search($request->busqueda)->get();
                
                if(count($medicalData) == 0){
                    session()->flash('message', 'No se encontró ningun registro con número: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('Admin.search', ['index'=>$index, 'medicalData'=>$medicalData]);
            break;
            
            case 6:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
            
                $student = \App\student::search($request->busqueda)->get();
                
                if(count($student) == 0){
                    session()->flash('message', 'No se encontró ningun registro con boleta: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }
                
                return view('Admin.search', ['index'=>$index, 'student'=>$student]);
            break;
        }
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
    public function destroy(Request $request)
    {
        $student = \App\student::find($request->idVal2);
        $user = $student->user;
        
        session()->flash('message', 'Se eliminó a: '.$user. ' con boleta de: '. $user->identificacion);
        
        $user->delete();
        
        session()->flash('type', 'warning');
        
        return back();
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function addBlog(){
        
        $index = 3;
        $info=\App\info::all();
        $images=\App\images::all();
        $video=\App\video::all();
        
        return view('Admin.addBlog', ['index'=>$index,'info'=> $info,'images'=> $images,'video'=> $video]);

    }

    public function updateInfo(Request $request){

        $this->validate($request,[

            'Titulo'=>'required|min:4',
            'Contenido'=>'required'

            ]);

        $post=\App\info::find($request->id_post);
        $post->update([
            'titulo'=>$request->Titulo,
            'contenido'=>$request->Contenido
            ]);
        return back();

    }

    public function deletInfo(Request $request)
    {
        $post=\App\info::find($request->id_delete);
        $post->delete();
        return back();
    }
    public function newInfo(Request $request)
    {
        $this->validate($request,[

            'Title'=>'required|min:4',
            'Content'=>'required'

            ]);
        $create=\App\info::create([
                'usuario_id'=> Auth::user()->id,
                'titulo' => $request->Title,
                'contenido'=>$request->Content
            ]);
        return back();
    }

    public function newImage(Request $request)
    {
        $this->validate($request,[

            'Titulo_De_La_Imagen'=>'required|min:4',
            'Link_De_Imagen'=>'required',

            ]);
        $create=\App\images::create([
                'usuario_id'=> Auth::user()->id,
                'imagen' => $request->Link_De_Imagen,
                'titulo'=>$request->Titulo_De_La_Imagen,
            ]);
        return back();
    }
       public function updateImage(Request $request){

        $this->validate($request,[

            'contenidoImg'=>'required',
            'tituloImg'=>'required|min:4'
            
            ]);

        $post=\App\images::find($request->id_postImg);
        $post->update([
            'imagen'=>$request->contenidoImg,
            'titulo'=>$request->tituloImg
            ]);
        return back();

    }

        public function deletImage(Request $request)
    {
        $post=\App\images::find($request->id_deleteImg);
        $post->delete();
        return back();
    }
    
 public function newVideo(Request $request)
    {
        $this->validate($request,[

            'Titulo_Del_Video'=>'required|min:4',
            'Link_Del_Video'=>'required',
            'Link_De_la_imagen'=>'required'

            ]);
        $create=\App\video::create([
                'usuario_id'=> Auth::user()->id,
                'titulo'=>$request->Titulo_Del_Video,
                'link'=>$request->Link_Del_Video,
                'imagen' => $request->Link_De_la_imagen   
            ]);
        return back();
    }
       public function updateVideo(Request $request){

        $this->validate($request,[

            'eTituloVid'=>'required|min:4',
            'eContenidoVid'=>'required',
            'eContenidoVidImg'=>'required',
            ]);

        $post=\App\video::find($request->id_postVid);
        $post->update([
            'titulo'=>$request->eTituloVid,
            'link'=>$request->eContenidoVid,
            'imagen'=>$request->eContenidoVidImg
            
            ]);
        return back();

    }

        public function deletVideo(Request $request)
    {
        $post=\App\video::find($request->id_deleteVid);
        $post->delete();
        return back();
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
            'facebook' => 'url',
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
            'facebook' => $request->facebook,
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
        if($variable == 1){
            $this->validate($request, [
                'nombre' => 'required|min:5|max:255',
                'color' => 'required',
            ]);
        } elseif($variable == 6){
            $this->validate($request, [
                'nombre' => 'required',
                'numero' => 'required',
                'municipio' => 'required',
            ]);
        } else{
            $this->validate($request, [
                'nombre' => 'required|min:5|max:255',
            ]);
        }

    
        if($variable == 1){
           \App\carrer::create([
                'nombre' => $request->nombre,
                'color' => $request->color,
            ]);
        } elseif($variable == 2){
            \App\state::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 3){
            \App\medicalInstitute::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 4){
            \App\place::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 5){
            \App\status::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 6){
            \App\clinic::create([
                'tipo' => $request->nombre,
                'numero' => $request->numero,
                'municipio_id' => $request->municipio,
            ]);
        }
            
        return redirect('/admin/config/insert/'. $variable);
    }
    
    public function updateRegister(Request $request, $variable){
        if($variable == 1){
            $this->validate($request, [
                'nombre' => 'required',
                'color' => 'required',
            ]);
        } elseif($variable == 6){
            $this->validate($request, [
                'nombre' => 'required',
                'numero' => 'required',
                'municipio' => 'required',
            ]);
        } else{
            $this->validate($request, [
                'nombre' => 'required',
            ]);
        }
    
        if($variable == 1){
            $carrer = \App\carrer::find($request->idVal);
            $carrer->update([
                'nombre' => $request->nombre,
                'color' => $request->color,
            ]);
        } elseif($variable == 2){
            $state = \App\state::find($request->idVal);
            $state->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 3){
            $medicalInstitute = \App\medicalInstitute::find($request->idVal);
            $medicalInstitute->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 4){
            $place = \App\place::find($request->idVal);
            $place->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 5){
            $status = \App\status::find($request->idVal);
            $status->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 6){
            $clinic = \App\clinic::find($request->idVal);
            $clinic->update([
                'tipo' => $request->nombre,
                'numero' => $request->numero,
                'municipio_id' => $request->municipio,
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
        } elseif($variable == 3){
            $medicalInstitute = \App\medicalInstitute::find($request->idVal2);
            $medicalInstitute->delete();
        } elseif($variable == 4){
            $place = \App\place::find($request->idVal2);
            $place->delete();
        } elseif($variable == 5){
            $status = \App\status::find($request->idVal2);
            $status->delete();
        } elseif($variable == 6){
            $clinic = \App\clinic::find($request->idVal2);
            $clinic->delete();
        }
        
        return redirect('/admin/config/insert/'. $variable);
    }
}
