<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
