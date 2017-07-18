<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class startController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index=1;
        $images = \App\images::all()->sortByDesc('updated_at')->take(5);
        $messages = \App\message::all()->sortByDesc('updated_at')->take(6);
        $infos = \App\info::all()->sortByDesc('updated_at')->take(6);
        
        $subdel = \App\clinic::find(1);
        $clinic1 = \App\clinic::find(2);
        $clinic2 = \App\clinic::find(5);
        $clinic3 = \App\clinic::find(6);
        
        return view('Welcome.start',['index' => $index, 'images'=>$images, 'messages'=>$messages, 'infos'=>$infos, 'subdel'=>$subdel, 'clinic1'=>$clinic1, 'clinic2'=>$clinic2, 'clinic3'=>$clinic3]);
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
