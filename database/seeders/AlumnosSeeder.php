<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->truncate();

        DB::table('alumnos')->insert([
            "id"=>"1",
            "nombre"=>"Santi",
            "apellidos"=>"Luque García",
            "DNI"=>"54237998l"
        ]);

        DB::table('alumnos')->insert([
            "id"=>"2",
            "nombre"=>"Fran",
            "apellidos"=>"Hidalgo Aragón",
            "DNI"=>"12345678a"
        ]);

        DB::table('alumnos')->insert([
            "id"=>"3",
            "nombre"=>"Alejandro",
            "apellidos"=>"Moreno Morenoide",
            "DNI"=>"87654321o"
        ]);
    }
}
