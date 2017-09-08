<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Image;
use App\user;
use App\student;

class imageController extends Controller
{

    public function index()
    {
        $index=-29;
        return view('images.images',['index' => $index]);
    }

    public function uploadImage()
    {
        $file = Input::file('image');
/*/-----------------------------------Subir imagen ---------------------------------/*/
        /*$random = str_random(10);
        $nombre = $random.'-'.$file->getClientOriginalName();
        $path = public_path('uploads/'.$nombre);
        $url = '/uploads/'.$nombre;
        $image = Image::make($file->getRealPath() );
        $image->save( $path);

        return '<img src="'.$url.'" />';*/
/*/-----------------------------------Codificar imagen ---------------------------------/*/
       /* $image = Image::make($file->getRealPath());
        $image->encode('data-url');

        return '<img src="'.$image.'" />';*/
/*/-----------------------------------Subir y Codificar imagen ---------------------------------/*/
        $nombre = $file->getClientOriginalName();
        $path = public_path('uploads/'.$nombre);
        $url = '/uploads/'.$nombre;
        $image = Image::make($file->getRealPath() );

        $image->resize(450,null,function($c){
            $c->aspectRatio();
        });

        /*$image->save( $path);*/

        $image->encode('data-url');

        /*return '<img src="'.$image.'" />';*/
    }

    public function showImage()
    {

        $image = Image::make(public_path('uploads/1.jpg'));
        $image->resize(450,null,function($c){
            $c->aspectRatio();
        });
        $image->save('uploads/1.jpg');
        return $image->response('jpg');
    }

    public function postNewImage(Request $request)
    {
        $this-> validate($request,[
            'foto' => 'required|image'
            ]);

        $user = Auth::user();
        $extension = $request->file('foto')->getClientOriginalExtension();
        $file_name = $user->id.'.'.$extension;

        Image::make($request->file('foto'))
            ->resize(450,null,function($c){
            $c->aspectRatio();
        })
            ->save('uploads/'.$file_name);

        /*$user->foto = $extension;*/
        $user->foto = $file_name;
        $user->save();

        return back()->with('notification','Se ha actualizado tu foto de perfil.');
    }
    
}
