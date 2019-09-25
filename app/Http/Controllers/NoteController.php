<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*return response()->json([
        	'TODAS LAS NOTAS' => Note::all()], 200
        );
        $note = Note::all();
		*/
       
        return response()->json([
        	'NOTAS FAVORITAS' => Note::where('favorito', 1)->get()], 200
        );
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
       $note = new Note();

       $note->titulo = $request->titulo;
       $note->descripcion = $request->descripcion;
       $note->favorito = $request->favorito;
       $note->save();
       print("Nota creada");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\McFly  $mcFly
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
    	return response()->json([
    		'MESSAGE' => $note], 200
		);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\McFly  $mcFly
     * @return \Illuminate\Http\Response
     */
    public function edit(McFly $mcFly)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\McFly  $mcFly
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\McFly  $mcFly
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        
    }
}
