<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
       // dd('olá Mundo!');
       $nome = 'FIFA';
       $id = 5;
        return view('jogos.index',['nome'=>$nome,'id'=>$id]);
    }
}
    

