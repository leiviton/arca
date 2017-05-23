<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'CCARCA';
        $year = date('Y');
        return view('contact',compact('titulo', 'year'));
    }

    public function postContato(\Request $request) {
        $rules = array( 'nome' => 'required', 'email' => 'required|email', 'texto' => 'required' );
        $validation = \Validator::make($request->all(), $rules);
        $data = array();
        $data['nome'] = $request->get("nome");
        $data['email'] = $request->get("email");
        $data['texto'] = $request->get("mensagem");
        if($validation->passes()) {
            Mail::send('emails.contato', $data, function($message) {
            $message->from($request->get('email'), $request->get('nome'));
            $message->to('leivitoncs@gmail.com') ->subject('Site Arca');
            });
        return Redirect::to('contact') ->with('message', 'Mensagem enviada com sucesso!');
        }
        return Redirect::to('contact') 
        ->withInput() 
        ->withErrors($validation) 
        ->with('message', 'Erro! Preencha todos os campos corretamente.');
    }
}
