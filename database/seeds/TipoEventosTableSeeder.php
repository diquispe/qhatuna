<?php

use App\TipoEvento;
use Illuminate\Database\Seeder;

class TipoEventosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TipoEvento::class, 30)->create();
    }
}
