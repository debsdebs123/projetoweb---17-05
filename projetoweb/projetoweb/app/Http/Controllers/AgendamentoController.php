<?php
//Aqui é onde se controla o CRUD e seus respectivos comandos
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agendamentos;

//Classe Agendamento

class AgendamentosController extends Controller
{
   
    //Função POST = Cadastrar
    public function store(Request $request)
    {
        //Validando Dados
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'telefone' => 'required|max:20',
            'origem' => 'required|max:255',
            'contato' => 'required|max:255',
            'observacao' => 'required|max:255',
            'acao' => 'required|max:255',
        ]);

        //Cadastrando Dados    
        $agendamento = new Agendamentos();
        $agendamento->nome = $request->nome;
        $agendamento->telefone = $request->telefone;
        $agendamento->origem = $request->origem;
        $agendamento->data_contato = $request->contato;
        $agendamento->observacao = $request->observacao;
        $agendamento->acao = $request->acao;
        $agendamento->save();

        //Retornando a rota "Index" (Cadastrar) com uma mensagem   
        return redirect()->route('index')
            ->with('success', 'Agendamento bem sucedido!!!');
    }



    //Função GET = Consultar
    public function show(){

       //Exibindo todos os dados do Agendamento
        $tableagenda = Agendamentos::all();
        
       //Retornando pela view "Consulta"
        return view('consulta', ['agendamentos' => $tableagenda]);
    }


    //Função GET = Editar
    public function edit(Request $request){

         //Exibindo todos os dados do Agendamento
        $tableagenda = Agendamentos::all();
        
 
        //Retornando pela view "Editar"
        return view('editar', ['agendamentos' => $tableagenda]);
         
    }

    //Função UPDATE = Alterar
    public function update(Request $request){
        
        //Cadastrando dados para serem alterados
        $agendamento = new Agendamentos();
        $agendamento->nome = $request->nome;
        $agendamento->telefone = $request->telefone;
        $agendamento->origem = $request->origem;
        $agendamento->data_contato = $request->contato;
        $agendamento->observacao = $request->observacao;
        $agendamento->acao = $request->acao;
        $agendamento->save();

        //Retornando a rota "Atualizar" com uma mensagem      
        return redirect()->route('atualizar')
            ->with('success', 'Agendamento alterado!!!');
    }

    //Função DELETE = Excluir
    public function destroy(Request $request){

        //Cadastrando dados para serem excluidos
        $agendamento = new Agendamentos();
        $agendamento->nome = $request->nome;
        $agendamento->telefone = $request->telefone;
        $agendamento->origem = $request->origem;
        $agendamento->data_contato = $request->contato;
        $agendamento->observacao = $request->observacao;
        $agendamento->acao = $request->acao;
        $agendamento->delete();

        //Retornando a rota "Excluir"  com uma mensagem       
        return redirect()->route('excluir')
            ->with('success', 'Agendamento excluido!!!');

    }
}
