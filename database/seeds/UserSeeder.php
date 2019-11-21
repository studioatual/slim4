<?php

use Phinx\Seed\AbstractSeed;

class UserSeeder extends AbstractSeed
{
    public function run()
    {
        $table = $this->table('users');
        $table->truncate();

        $data = date("Y-m-d H:i:s");

        $users = [
            [
                'name' => 'Usuario de Teste',
                'email' => 'teste@studioatual.com',
                'username' => 'teste',
                'password' => password_hash('teste', PASSWORD_DEFAULT),
                'hash' => '',
                'admin' => 1,
                'created_at' => $data,
                'updated_at' => $data
            ]
        ];

        $table->insert($users)->save();
    }
}
