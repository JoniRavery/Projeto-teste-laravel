<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    public function run()
    {
        Noticia::create([
            'titulo' => 'Notícia 1',
            'detalhes' => 'Detalhes da Notícia 1',
        ]);

        Noticia::create([
            'titulo' => 'Notícia 2',
            'detalhes' => 'Detalhes da Notícia 222222222222222222222.',
        ]);

        Noticia::create([
            'titulo' => 'Notícia 3',
            'detalhes' => 'Detalhes da Notícia 3.',
        ]);

        Noticia::create([
            'titulo' => 'Notícia 4',
            'detalhes' => 'Detalhes da Notícia 4.',
        ]);
    }
}
