<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();
        
        return view('titulo_noticias', compact('noticias'));
    }

    public function show(Noticia $noticia)
{
    return view('detalhes', compact('noticia'));
}
}
