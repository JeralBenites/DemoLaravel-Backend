<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artista;


class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    
    /**
     * Ejemplo de método REST 
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $Art=Artista::all();
        return response()->json($Art);
    }

    public function D()
    {
        $Art=Artista::where('nomArt','like','D%')->get();
        return response()->json($Art);
    }

    public function crear(Request $request)
    {

       $artCreate = new Artista;

       $artCreate->nomArt = $request->nomArt;
       $artCreate->telArt = $request->telArt;


       $artCreate->save();

       return response()->json($artCreate);
    }

    public function Actualizar(Request $request)
    {

        $artModify = Artista::find($request->idArt);

        $artModify->nomArt = $request->nomArt;
        $artModify->telArt = $request->telArt;
        
        $artModify->save();

       return response()->json($artModify);
    }

    public function Eliminar(Request $request)
    {

        $artDel = Artista::find($request->idArt);

        $artDel->delete();
        return response()->json($artDel);
    }

    public function buscarId(Request $request)
    {

        $artBus = Artista::find($request->idArt);

        return response()->json($artBus);
    }

}
