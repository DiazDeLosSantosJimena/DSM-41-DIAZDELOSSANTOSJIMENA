<?php

namespace App\Http\Controllers;
use App\Models\students;
use App\Models\subjects;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = students::all();
        return view('Students.index', compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = subjects::all('id','name');
        return view('Students.add', compact('subjects'));
    }

    /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $input=$request->all();
        //return $input;
        students::create($input);
        return redirect('students')->with('message','Se ha creado correctamente al estudiante');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = students::find($id);
        return view('Students.show')->with('students',$student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = subjects::all('id','name');
        $student = students::find($id);
        return view('Students.edit',compact('subjects'))->with('students', $student);
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
        $student = students::findOrFail($id);
        $input=$request->all();
        $student->update($input);
        return redirect('students')->with('message','Se ha actualizado el registro correctamente');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = students::findOrFail($id);

        $student->delete();
        return redirect('students')->with('danger','correctamente el estudiante');
    }
}
