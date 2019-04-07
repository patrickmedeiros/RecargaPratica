<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nome' => 'Patrick',
            'sobrenome' => 'Gonçalves',
            'cpf' => 876,
            'rg' => 22,
            'dataNascimento' => '12021993',
            'endereco' => 'Carlos de carvalho 372',
            'email' => 'patrickgoncalves@hotmail.com',
            'numeroCartao' => 7383, 
            'senha' => 'Patrick123' 
        ]);
    }
}
