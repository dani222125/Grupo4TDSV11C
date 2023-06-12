<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            DB::table('cliente')->insert([
                'nombre' => 'Cliente '.$i,
                'apellido' => 'Apellido '.$i,
                'fecha_nac' => '1995-01-05',
            ]);
        }
    }
}
