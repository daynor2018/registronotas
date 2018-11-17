<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_docente = Role::where('name', 'docente')->first();
        $role_administrador = Role::where('name', 'administrador')->first();
        $role_estudiante = Role::where('name', 'estudiante')->first();

        $user = new User();
        $user->firstname = 'daynor';
        $user->email = 'daynor@app.com';
        $user->password = bcrypt('aui%&PYD');
        $user->genre = '1';
        $user->state = '1';
        $user->save();
        $user->roles()->attach($role_administrador);
    }
}
