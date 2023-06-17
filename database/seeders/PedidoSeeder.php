<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 12; $i++) {
            Pedido::create([
                'fecha_pedido' => $faker->dateTimeBetween('-1 year', 'now'),
                'fecha_entrega' => $faker->dateTimeBetween('now', '+1 year'),
                'observaciones' => $faker->text(50),
                'id_cliente' => $faker->numberBetween(1, 12),
            ]);
    }
    }
}
