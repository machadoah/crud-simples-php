<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aluno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            Aluno::create(['nome'=>'Gabriele','email'=>'gabriele@email.com','telefone'=>'13999999999']);
            
            Aluno::create(['nome'=>'Stella','email'=>'stella@email.com','telefone'=>'13999999999']);

            Aluno::create(['nome'=>'Teste','email'=>'teste@email.com','telefone'=>'13999999999']);

    }
}
