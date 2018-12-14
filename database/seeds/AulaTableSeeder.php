<?php

use Illuminate\Database\Seeder;
use App\Aula;

class AulaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aula = new Aula();
        $aula->name = '204';
        $aula->state = '1';
        $aula->save();

        $aula = new Aula();
        $aula->name = '304';
        $aula->state = '1';
        $aula->save();

        $aula = new Aula();
        $aula->name = '404';
        $aula->state = '1';
        $aula->save();

        $aula = new Aula();
        $aula->name = '211';
        $aula->state = '1';
        $aula->save();

        $aula = new Aula();
        $aula->name = '311';
        $aula->state = '1';
        $aula->save();

        $aula = new Aula();
        $aula->name = '411';
        $aula->state = '1';
        $aula->save();
    }
}
