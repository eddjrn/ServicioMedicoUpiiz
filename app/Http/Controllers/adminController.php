<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        
        return view('Admin.start', ['index'=>$index]);
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
        
        
        return view('Admin.lists', ['index'=>$index, 'numbers'=>$numbers, 'statusStyle'=>$statusStyle, 'carrers'=>$carrers, 'status'=>$status]);
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
            'form-control-orange-fill',
            'form-control-red-fill',
            'form-control-green-fill',
            'form-control-blue-fill',
            'form-control-danger',
        );
        
        $student = \App\student::find($id);
        
        return view('Admin.student', ['index'=>$index, 'statusStyle'=>$statusStyle, 'student'=>$student]);
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
