<?php

namespace App\Http\Controllers;
use App\Models\subjects;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Definimos nuestra vista
        $subjects = subjects::all();
        return view('subjects.index', compact('subjects'));
        //return Response()->json(['Asignatura'=>$subjects]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Subjects.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'name'=> 'required|min:10|string',
            'description' =>'required|min:10'
        ];

        $message = [
            'name.required' => 'El nombre es requerido',
            'description.required' => 'La descripcion es requerida',
        ];

        $this->validate($request, $rules, $message);
        $input=$request->all();
        subjects::create($input);
        return redirect('subjects')->with('message','Se ha creado correctamente la asignatura');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = subjects::find($id);
        return view('Subjects.show')->with('subjects',$subject);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = subjects::find($id);
        return view('Subjects.edit')->with('subjects', $subject);
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
        $subject = subjects::findOrFail($id);
        $rules =[
            'name'=> 'required|min:25',
            'description' =>'required|min:100'
        ];

        $this->validate($request, $rules);
        $input=$request->all();
        $subject->update($input);
        return redirect('subjects')->with('message','Se ha actualizado el registro correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subject = subjects::findOrFail($id);

        $subject->delete();
        return redirect('subjects')->with('danger','correctamente la asignatura');
    }
}
