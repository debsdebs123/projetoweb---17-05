<?php
//Aqui é onde ficam as rotas
use App\Models\Agendamentos;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentosController;

// *****STORE === CADASTRAR === index.blade.php
// *****SHOW ===== CONSULTA ==== consulta.blade.php



//Rotas sendo direcionadas para o "AgendamentoController", onde se está os comandos abaixo do CRUD(store - "cadastrar", show - "consultar", edit, update e destroy)
Route::post('/cadastrar', [AgendamentosController::class, 'store'])->name('agendamentos.store');

Route::get('/consulta', [AgendamentosController::class, 'show'])->name('agendamentos.show');

Route::get('/editar', [AgendamentosController::class, 'edit'])->name('agendamentos.edit');

Route::patch('/atualizar', [AgendamentosController::class, 'update'])->name('agendamentos.update');

Route::delete('/excluir', [AgendamentosController::class, 'destroy'])->name('agendamentos.destroy');


//Rotas
Route::get('/index', function () {
    return view('index');
});

Route::get('/consulta', function () {
    return view('consulta');
});

Route::get('/editar', function () {
    return view('editar');
});

Route::get('/atualizar', function () {
    return view('atualizar');
});

Route::get('/excluir', function () {
    return view('excluir');
});






Route::get('/welcome', function () {
    return view('welcome');
});



//Inserindo dados através da rota "index"
Route::get('/index', function () {
    $registro1 = new Agendamentos;
    $registro1->nome = "Rodrigo Alves";
    $registro1->telefone = "(11)98522-9966";
    $registro1->origem = "Celular";
    $registro1->data_contato = "2023-03-28";
    $registro1->observacao = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10php";
    $registro1->save();

    $registro2 = new Agendamentos;
    $registro2->nome = "Fernanda Ribeiro";
    $registro2->telefone = "(11)92312-2371";
    $registro2->origem = "Celular";
    $registro2->data_contato = "2023-02-15";
    $registro2->observacao = "Entrou em contato no dia 15.02.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10php";
    $registro2->save();

    $registro3 = new Agendamentos;
    $registro3->nome = "Julia Silva";
    $registro3->telefone = "(11)91261-1356";
    $registro3->origem = "Celular";
    $registro3->data_contato = "2023-12-10";
    $registro3->observacao = "Entrou em contato no dia 10.12.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10php";
    $registro3->save();

    $registro4 = new Agendamentos;
    $registro4->nome = "Mateus Lima";
    $registro4->telefone = "(11)92732-1231";
    $registro4->origem = "Celular";
    $registro4->data_contato = "2023-05-05";
    $registro4->observacao = "Entrou em contato no dia 05.05.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10php";
    $registro4->save();

    return view('index');
});

