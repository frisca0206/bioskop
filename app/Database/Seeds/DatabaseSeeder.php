<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('FilmTable');
        $this->call('GenreTable');
        $this->call('KursiTable');
        $this->call('CemilanTable');
        $this->call('BioskopTable');
    }
}
