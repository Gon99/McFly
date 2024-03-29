<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       $user = new User();

       $user->nombre = $request->nombre;
       $user->save();
       print("Usuario " . $user->nombre . " creado");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\McFly  $mcFly
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
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
    public function update(Request $request, User $user)
    {
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\McFly  $mcFly
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
    }
}
