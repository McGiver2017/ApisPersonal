<?php

use Illuminate\Database\Seeder;
use App\usuario;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(usuario::class,35)->create();
    }
}
