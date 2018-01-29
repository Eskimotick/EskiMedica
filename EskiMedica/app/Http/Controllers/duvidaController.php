<?php

namespace App\Http\Controllers;

use App\duvida;
use App\Mail\Dados;
use Illuminate\Http\Request;

class duvidaController extends Controller
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
    public function store(Request $request) {

        $nome = $request->input('nome');
        $sobrenome = $request->input('sobrenome');
        $email = $request->input('email');
        $cliente = $request->input('cliente');
        $mensagem = $request->input('mensagem');

        duvida::create(['nome' => $nome, 'sobrenome' => $sobrenome, 'email' => $email, 'cliente' => $cliente, 'mensagem' => $mensagem]);

        $user = duvida::create(request(['nome', 'sobrenome', 'email', 'cliente', 'mensagem']));

        \Mail::to($user)->send(new Dados($user));



        return view('index');
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
