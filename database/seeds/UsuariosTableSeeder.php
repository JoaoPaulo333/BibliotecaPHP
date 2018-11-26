<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'cpf' => '123456789',
            'telefone' => '32988177455',
            'nome'  => 'João Paulo',
            'senha' => sha1('123'),
            'email' => 'Joao@joao.com',
            'tipo' => 'Administrador',
            'punicao' => '0',

        ]);
    }
}
