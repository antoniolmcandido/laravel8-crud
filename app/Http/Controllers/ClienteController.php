<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{    
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'email'=>'required'
        ]);

        $cliente = new Cliente([
            'nome' => $request->get('nome'),
            'sobrenome' => $request->get('sobrenome'),
            'email' => $request->get('email'),
            'telefone' => $request->get('telefone'),
            'cidade' => $request->get('cidade'),
            'estado' => $request->get('estado')
        ]);
        $cliente->save();
        return redirect('/clientes')->with('success', 'Cliente Cadastrado!');
    }
    
    public function show(){
        $clientes = Cliente::all();
        return view('clientes.show', ['clientes' => $clientes]);
    }
    
    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente')); 
    }
    
    public function update(Request $request, $id)    {
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'email'=>'required'
        ]);
        $cliente = Cliente::find($id);
        $cliente->nome =  $request->get('nome');
        $cliente->sobrenome = $request->get('sobrenome');
        $cliente->email = $request->get('email');
        $cliente->telefone = $request->get('telefone');
        $cliente->cidade = $request->get('cidade');
        $cliente->estado = $request->get('estado');
        $cliente->save();
        return redirect('/clientes')->with('success', 'Cliente Atualizado!');
    }

    public function destroy($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect('/clientes')->with('success', 'Cliente Excluído!');
    }
}