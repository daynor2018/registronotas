<?php

use Illuminate\Database\Seeder;
use App\Dia;

class DiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dia = new Dia();
        $dia->name = 'lunes';
        $dia->state = '1';
        $dia->save();
        
        $dia = new Dia();
        $dia->name = 'martes';
        $dia->state = '1';
        $dia->save();
        
        $dia = new Dia();
        $dia->name = 'miercoles';
        $dia->state = '1';
        $dia->save();
        
        $dia = new Dia();
        $dia->name = 'jueves';
        $dia->state = '1';
        $dia->save();
        
        $dia = new Dia();
        $dia->name = 'viernes';
        $dia->state = '1';
        $dia->save();
        
        $dia = new Dia();
        $dia->name = 'sabado';
        $dia->state = '1';
        $dia->save();
        
        $dia = new Dia();
        $dia->name = 'domingo';
        $dia->state = '0';
        $dia->save();
    }
}
