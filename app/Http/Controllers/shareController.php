<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Hash;
use Image;

class shareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('avoidStudent');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function profile($type){
        $index = -1;

        $user = Auth::user();

        if($type == 1){ //return Admin profile
            $urlToCancel = '/admin';
          return view('Admin.profile', [
              'index'=>$index,
              'user'=>$user,
              'type'=>$type,
              'urlToCancel'=>$urlToCancel,
          ]);
        } elseif($type == 3){ //return Devel profile
            $urlToCancel = '/devel';
          return view('Devel.profile', [
              'index'=>$index,
              'user'=>$user,
              'type'=>$type,
              'urlToCancel'=>$urlToCancel,
          ]);
        }

    }

    public function profilePassword(Request $request, $type){
        $this->validate($request, [
            'clave' => 'required',
        ]);

        if(Hash::check($request->clave, Auth::user()->password)){
            $index = -1;

            $edit = true;
            $user = Auth::user();

            if($type == 1){ //return Admin profile
                $urlToCancel = '/admin';
              return view('Admin.profile', [
                  'index'=>$index,
                  'user'=>$user,
                  'edit'=>$edit,
                  'type'=>$type,
                  'urlToCancel'=>$urlToCancel,
              ]);
            } elseif($type == 3){ //return Devel profile
                $urlToCancel = '/devel';
              return view('Devel.profile', [
                  'index'=>$index,
                  'user'=>$user,
                  'edit'=>$edit,
                  'type'=>$type,
                  'urlToCancel'=>$urlToCancel,
              ]);
            }
        } else{
            return redirect('/person/profile/'.$type)
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas',
            ]);
        }
    }

    public function editProfile(Request $request, $type){
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

        return redirect('/person/profile/'.$type);
    }

    public function destroyPhoto(Request $request, $type){
    	$user = \App\user::find($request->user);
    	$user->update([
    		'foto'=>null,
    	]);
    	return redirect('/person/profile/'.$type);
    }

    public function updatePhoto(Request $request, $type){
        $file = $request->file('croppedImage');
        $image2 = Image::make($file->getRealPath())->resize(300, 300);
        $image2->encode('jpg', 50);

        Auth::user()->update([
          'foto'=>$image2,
        ]);
    }

    //---------------------------------------------------------------------------------------

    public function getMessages($type){
        $index = 0;
        //$messages = \App\message::all()->where('usuario_id', Auth::user()->id)->sortByDesc('updated_at');
        $messages = Auth::user()->messages->sortByDesc('updated_at');

        if($type == 1){
          return view('Admin.messages', ['index'=>$index, 'messages'=>$messages]);
        } else if($type == 3){
          return view('Devel.messages', ['index'=>$index, 'messages'=>$messages]);
        }

    }

    public function newMessage(Request $request){
        $this->validate($request, [
            'tituloMensaje' => 'required',
            'contenidoMensaje' => 'required',
        ]);

        $message = \App\message::create([
            'usuario_id' => Auth::user()->id,
            'titulo' => $request->tituloMensaje,
            'contenido' => $request->contenidoMensaje,
            'destino' => $request->usuarioMensaje,
        ]);

        session()->flash('message', 'Se creó nuevo aviso con el titulo: '. $request->tituloMensaje);
        session()->flash('type', 'success');

        return back();
    }

    public function message(Request $request){
        $this->validate($request, [
            'titulo' => 'required',
            'contenido' => 'required',
        ]);

        $message = \App\message::create([
            'usuario_id' => Auth::user()->id,
            'titulo' => $request->titulo,
            'contenido' => $request->contenido,
        ]);

        session()->flash('message', 'Se creó nuevo aviso para toda la comunidad con el titulo: '. $request->titulo);
        session()->flash('type', 'success');

        return back();
    }

    public function editMessage(Request $request, $message){
        $this->validate($request, [
            'tituloMensaje' => 'required',
            'contenidoMensaje' => 'required',
        ]);

        $updateMessage = \App\message::find($message);
        $updateMessage->update([
            'titulo' => $request->tituloMensaje,
            'contenido' => $request->contenidoMensaje,
        ]);

        session()->flash('message', 'Se actualizó mensaje con el titulo: '. $request->tituloMensaje);
        session()->flash('type', 'success');

        return back();
    }

    public function destroyMessage(Request $request){
        $message = \App\message::find($request->message);
        $message->delete();

        session()->flash('message', 'Se elimió el mensaje con el titulo: '. $request->tituloMensaje);
        session()->flash('type', 'danger');

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
}
