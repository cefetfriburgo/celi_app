<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BairroPadraoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
	\App\Models\Bairro::firstOrCreate(
        ['id' => 1], // Procura pelo ID 1
        ['nome' => 'NAO INFORMADO'] // Se não achar, cria com esse nome
    );
    }
}
