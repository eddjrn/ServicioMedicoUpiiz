<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

use Hash;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $index = 5;
        $images = \App\images::all()->sortByDesc('updated_at')->take(5);
        $messages = \App\message::all()->sortByDesc('updated_at')->where('destino', null)->take(6);
        $infos = \App\info::all()->sortByDesc('updated_at')->take(6);

        $subdel = \App\clinic::find(1);
        $clinic1 = \App\clinic::find(2);
        $clinic2 = \App\clinic::find(5);
        $clinic3 = \App\clinic::find(6);

        return view('Admin.start',[
        	'index' => $index,
        	'images'=>$images,
        	'messages'=>$messages,
        	'infos'=>$infos,
        	'subdel'=>$subdel,
        	'clinic1'=>$clinic1,
        	'clinic2'=>$clinic2,
        	'clinic3'=>$clinic3,
        ]);
    }

    public function blog()
    {
        $index = 1;
        $info=\App\info::paginate(10);
        $images=\App\images::all();
        $video=\App\video::all();
        $tutorials=\App\tutorials::all();
        return view('Admin.blog', ['index'=>$index,'info'=> $info,'images'=> $images,'video'=> $video,'tutorials'=> $tutorials]);
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

    public function lists()
    {
        $index = 2;

        $numbers = config('global.numbers');

        $carrers = \App\carrer::all();
        $status = \App\status::all();
        $studentAll = \App\student::all();
        $medicalDatas = \App\medicalData::all();


        return view('Admin.lists', ['index'=>$index, 'numbers'=>$numbers, 'carrers'=>$carrers, 'status'=>$status, 'studentAll'=>$studentAll, 'medicalDatas'=>$medicalDatas]);
    }

    public function pagination(Request $request, $list){
        $array = $request->data;
        $idUniqueSection = $request->id;
        $indexSection = $request->index;

        $students = new Collection();

        $page = ($list-1) * 5;
        $slice = array_slice($array,$page,5);

        //return $slice;

        foreach($slice as $a){
            $students->push(\App\student::find($a));
        }
        //return print_r($students);

        //$studentsPaginated = $students->forPage($list, 5);

        $lastPage = count($array) / 5;

        $statusStyle = config('global.statusStyleTextBox');
        return view('Admin.list', ['list'=>$list, 'array'=>$array, 'statusStyle'=>$statusStyle, 'studentsPaginated'=>$students, 'lastPage'=>$lastPage, 'idUniqueSection'=>$idUniqueSection, 'indexSection'=>$indexSection]);
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

        $student = \App\student::find($id);

        return view('Admin.student', ['index'=>$index, 'student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //abort(500);

        //return ':v';

        $student = \App\student::find($id);
        $student->update([
            'documentacion'=>$request->documentacion,
            'estatus_id'=>$request->estatus,
            'observaciones'=>$request->observaciones,
        ]);

        $medicalData = $student->user->medicalData;
        $medicalData->update([
            'seguroVida'=>$request->seguro,
        ]);

        if($request->ajax()){
            $user = $student->user;
            return response()->json([
                "message" => "Se ha actualizado a el usuario:",
                "userName" => $user->__tostring(),
                "Id" => $user->identificacion,
                "carrer" => $student->carrer->nombre,
            ]);
        }

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
        //abort(500);

        $student = \App\student::find($request->idVal2);
        $user = $student->user;

        $user->delete();

        if($request->ajax()){
            return response()->json([
                "message" => "Se ha eliminado a el usuario:",
                "userName" => $user->__tostring(),
                "Id" => $user->identificacion,
                "carrer" => $student->carrer->nombre,
            ]);
        }

        session()->flash('message', 'Se eliminó a: '.$user. ' con boleta de: '. $user->identificacion);

        $user->delete();

        session()->flash('type', 'danger');

        return redirect('/admin/lists');
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function addBlog(){

        $index = 3;
        $info=\App\info::all();
        $images=\App\images::all();
        $video=\App\video::all();
        $tutorials=\App\tutorials::all();

        return view('Admin.addBlog', ['index'=>$index,'info'=> $info,'images'=> $images,'video'=> $video,'tutorials'=> $tutorials]);

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
            'Link_De_Imagen'=>'required|min:40',

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

            'contenidoImg'=>'required|min:40',
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
            'Link_Del_Video'=>'required|min:35',
            'Link_De_la_imagen'=>'required|min:40'

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
            'eContenidoVid'=>'required|min:35',
            'eContenidoVidImg'=>'required|min:40',
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

    public function newTuto(Request $request)
    {
        $this->validate($request,[

            'Titulo_Del_Tutorial'=>'required|min:4',
            'Link_Del_Tutorial'=>'required|min:35',
            'Link_De_la_imagen_Tutorial'=>'required|min:40'

            ]);
        $create=\App\tutorials::create([
                'usuario_id'=> Auth::user()->id,
                'titulo'=>$request->Titulo_Del_Tutorial,
                'link'=>$request->Link_Del_Tutorial,
                'imagen' => $request->Link_De_la_imagen_Tutorial
            ]);
        return back();
    }

    public function updateTuto(Request $request){

        $this->validate($request,[

            'eTituloTuto'=>'required|min:4',
            'eContenidoTuto'=>'required|min:35',
            'eContenidoTutoImg'=>'required|min:40',
            ]);

        $post=\App\tutorials::find($request->id_postTuto);
        $post->update([
            'titulo'=>$request->eTituloTuto,
            'link'=>$request->eContenidoTuto,
            'imagen'=>$request->eContenidoTutoImg

            ]);
        return back();

    }

        public function deletTuto(Request $request)
    {
        $post=\App\tutorials::find($request->id_deleteTuto);
        $post->delete();
        return back();
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
            if($request->ajax()){
                return response()->json([
                    "message" => "Se ha eliminado a el usuario:",
                ]);
            }

            return redirect('/admin/config/insert/'.$variable);
        } else{
            return redirect('/admin/config')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas',
            ]);
        }
    }

    public function specialFunctions(Request $request){
        $studentsOpc = $request->input('check-toggle-1', 'false');
        $postsOpc = $request->input('check-toggle-2', 'false');
        $imagesOpc = $request->input('check-toggle-3', 'false');
        $videosOpc = $request->input('check-toggle-4', 'false');
        $tareasOpc = $request->input('check-toggle-5', 'false');

        if($studentsOpc == 'true'){
            $students = \App\student::all()->where('estatus_id', 1);
            foreach($students as $student){
                $student->update([
                    'estatus_id' => 2,
                ]);
            }
        }
        if($postsOpc == 'true'){
            $posts = \App\info::all();
            foreach($posts as $post){
                $post->delete();
            }
        }
        if($imagesOpc == 'true'){
            $images = \App\images::all();
            foreach($images as $img){
                $img->delete();
            }
        }
        if($videosOpc == 'true'){
            $videos = \App\video::all();
            foreach($videos as $video){
                $video->delete();
            }
        }
        if($tareasOpc == 'true'){
            $tareas = Auth::user()->messages;
            foreach($tareas as $tarea){
                $tarea->delete();
            }
        }

        session()->flash('message', 'Operaciones seleccionadas realizadas');
        session()->flash('type', 'success');

        return redirect('/admin/config');
    }

    public function getRegisterWindow($variable){
        $index = -1;

        return view('Admin.dialogBox', ['index'=>$index, 'variable'=>$variable]);
    }

    public function insertRegister(Request $request, $variable){
        return redirect('/blocked');

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
                'mapa' => $request->mapa,
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
                'mapa' => $request->mapa,
            ]);
        }

        return redirect('/admin/config/insert/'. $variable);
    }

    public function deleteRegister(Request $request, $variable){
        return redirect('/blocked');

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
