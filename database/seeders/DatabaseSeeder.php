<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Llamada al seeder para insertar datos en la tabla 'alumnos'
        $this->call(AlumnosTableSeeder::class);
    }
}
