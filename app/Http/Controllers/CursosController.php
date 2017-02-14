<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    private $cursos = array(
    'Lógica de programação', 'Desenvolvimento Web com PHP',
    'Algoritmos e estrutura de dados', 'Test Driven Development'
    );

    //
    public function index()
    {
    $cursos = $this->cursos;
    return view('cursos.index', compact('cursos')); //compact cria um array associativo, deve usar o mesmo nome da variável que recebeu o array
                //cursos.index é igual a cursos/index
    }

    public function exibe($posicao) {
      $curso = $this->cursos[$posicao];
      return view('cursos.exibe', compact('curso'));

    }
}
