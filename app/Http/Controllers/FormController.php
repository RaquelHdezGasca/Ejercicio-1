<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TbMensaje;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Prueba = TbMensaje::get();
        //return $Prueba;
        return view('home', compact('Prueba'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Answer = TbMensaje::create([
            'name' => request('name'),
            'lastname' => request('lastname'),
        ]);
       
        //$name = request('name');
        //$id = DB::table('tb_mensaje')->where('name', $name)->value('id');
        //return back()->with('status', 'Nombre registrado con id: '.$id);
        //$name = request('name'); 
       //$id = DB::select('SELECT id FROM tb_mensaje WHERE name = $name');
        $renglon = TbMensaje::latest('id')->first(); //retorna un objeto TbMensaje
        //asi accedo a la propiedad id del objeto TbMensaje
        $id = $renglon->id;
        return back()->with('status', 'Nombre registrado con id: '.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$id = request('id');
        return view('consult');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->input('id');
        $name = DB::table('tb_mensaje')->where('id', $id)->value('name');
        $message = DB::table('tb_mensaje')->where('id', $id)->value('desc_mensaje');
        return back()->with('status', $name.', '.$message);
        //return back()->with('status', 'Hola: '.$id);


        //return view('consult');
        //return "Respuesta de la consulta";

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
