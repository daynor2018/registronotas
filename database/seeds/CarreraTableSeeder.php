<?php

use Illuminate\Database\Seeder;
use App\Carrera;

class CarreraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrera = new Carrera();
        $carrera->name = 'ingenieria de sistemas';
        $carrera->code = 'sis';
        $carrera->state = '1';
        $carrera->save();

        $carrera = new Carrera();
        $carrera->name = 'ingenieria comercial';
        $carrera->code = 'ico';
        $carrera->state = '1';
        $carrera->save();
    }
}
