<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Image;

class develController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('devel');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = 1;
        $users = \App\user::where('tipo', '!=', 2);
        $students = \App\user::where('tipo', '=', 2);
        $carrers = \App\carrer::all();
        $status = \App\status::all();
        $clinics = \App\clinic::all();
        $states = \App\state::all();
        $places = \App\place::all();
        $images = \App\images::all();
        $videos = \App\video::all();
        $info = \App\info::all();
        $medicalInstitute = \App\medicalInstitute::all();
        $tutorials = \App\tutorials::all();
        $messages = \App\message::all();

        return view ('Devel.start', [
          'index'=>$index,
          'users'=>$users,
          'students'=>$students,
          'carrers'=>$carrers,
          'status'=>$status,
          'clinics'=>$clinics,
          'states'=>$states,
          'places'=>$places,
          'images'=>$images,
          'videos'=>$videos,
          'info'=>$info,
          'medicalInstitute'=>$medicalInstitute,
          'tutorials'=>$tutorials,
          'messages'=>$messages,
        ]);
    }

    public function test(Request $request){
      $index = 2;
      // $file = $request->file('croppedImage');
      // $random = str_random(10);
      // $nombre = $random.'-'.$file->getClientOriginalName();
      // $path = public_path('Template/'.$nombre);
      // $url = '/Template/'.$nombre;
      // $image = Image::make($file->getRealPath());
      // $image->save($path);

      // $file = $request->file('abrir2');
      // $random = str_random(10);
      // $nombre = $random.'-'.$file->getClientOriginalName();
      // $path = public_path('Template/'.$nombre);
      // $url = '/Template/'.$nombre;
      // $image = Image::make($file->getRealPath());
      // $image->save($path);

      $file = $request->file('croppedImage');
      $image2 = Image::make($file->getRealPath())->resize(300, 300);
      $image2->encode('jpg', 50);
      //$image2->encode('data-url');

      Auth::user()->update([
        'foto'=>$image2,
      ]);

      return view('Devel.test', [
        'index' => $index,
        'url' => $image2,
      ]);
      // $data = json_decode($request->get('croppedImage'), true);
      // //$file = $_FILES['croppedImage'];
      // $name = Auth::user()->id.".png";
      // $image = Image::make($file)->crop(
      //       intval($data['height']),
      //       intval($data['width']),
      //       intval($data['x']),
      //       intval($data['y'])
      //   );
      // //$image->encode('data-url');
      //
      // return $image;

    //   if(!empty($file)) {
    //   $destinationPath = public_path() . '/Template/';
    //
    //   $file = str_replace('data:image/png;base64,', '', $file);
    //   $img = str_replace(' ', '+', $file);
    //   $data = base64_decode($img);
    //   $filename = date('ymdhis') . '_croppedImage' . ".png";
    //   $file = $destinationPath . $filename;
    //   $success = file_put_contents($file, $data);
    //
    //   // THEN RESIZE IT
    //   $returnData = 'Template/' . $filename;
    //   $image = Image::make(file_get_contents(URL::asset($returnData)));
    //   $image = $image->resize(450,450)->save($destinationPath . $filename);
    //
    //   if($success){
    //   return $returnData;
    //   }
    // }


    }

    public function test2(){
      $index = 2;
      $url = 0;
      return view('Devel.test', [
        'index' => $index,
        'url' => $url,
      ]);
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
