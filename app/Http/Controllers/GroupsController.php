<?php

namespace App\Http\Controllers;
/* Mandamos a llamar nuestro modelo  */
use App\Models\groups;
use App\Models\students;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* consulta eloquent larvavel */
        $groups = groups::all();
         //return $groups;
       return view('Groups.index', compact('groups'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = students::all('id','name');
        return view('Groups.add', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        groups::create($input);
        return redirect('groups')->with('message','Se ha creado correctamente el grupo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $group = groups::find($id);
        return view('Groups.show')->with('groups',$group);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = students::all('id','name');
        $group = groups::find($id);
        return view('Groups.edit', compact('students'))->with('groups', $group);
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

        $group = groups::find($id);
        $input=$request->all();
        $group->update($input);
        return redirect('groups')->with('message','Se ha actualizado el registro correctamente');
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
