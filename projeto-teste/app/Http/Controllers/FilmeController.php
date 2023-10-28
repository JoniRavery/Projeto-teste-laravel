<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FilmeController extends Controller
{
    public function index(Request $request)
    {
        $apiKey = '2cf971b941mshba9c9d20ed47192p13702djsn200ee849f17e';
        $client = new Client();
        $response = $client->request('GET', 'https://moviesdatabase.p.rapidapi.com/titles', [
            'headers' => [
                'X-RapidAPI-Host' => 'moviesdatabase.p.rapidapi.com',
                'X-RapidAPI-Key' => $apiKey,
            ],
        ]);

        // Decodificar a resposta JSON
        $data = json_decode($response->getBody());

        // Dividir a lista de filmes em grupos de três
        $filmes = array_chunk($data->results, 3);

        // Obter o número da página a ser exibida
        $pagina = $request->input('pagina', 1);

        // Verificar se a página solicitada existe
        if ($pagina <= count($filmes)) {
            $filmesPagina = $filmes[$pagina - 1];
        } else {
            $filmesPagina = [];
        }

        return view('filmes', [
            'filmes' => $filmesPagina,
            'pagina' => $pagina,
            'totalPaginas' => count($filmes),
        ]);
    }
}


