<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sistemas', function () {
    return "Turma de Sistemas";
});

Route::get('/mynome', function () {
    return "<b>Rosivan Santos</b>";
});

//Route::get('/{nome}', function ($nome) {
//    return "$nome";
//});

//Route::get('/alunos/{nome}/sistemas', function ($nome) {
 //   return "$nome";
//});

//Route::get('/alunos/{nome}/{sobrenome}', function ($nome, $sobrenome) {
//    return "$nome"." $sobrenome";
//});


Route::get('/produtos', function () {
	$produtos = [
		['1', 'Arroz', 'Tio João', 'R$ 8,50'],
		['2', 'Feijão', 'Tio João', 'R$ 5,50'],
		['3', 'Farinha', 'Farinha Timbiras', 'R$ 3,50']
	];
    return view('lista-produtos', [
    		'produtos' => $produtos
    ]);
});

Route::get('/produtos/criar', function () {
	echo "
	Tela para criar lista-produtos
	<a href='/produtos'>Voltar pra lista</a>
    ";
});



