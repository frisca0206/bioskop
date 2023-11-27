<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GenreTable extends Seeder
{
    private $table = 'genre';

    public function run()
    {
        $data = [ 
            [
                'id' => 1,
                'genre' => 'horror',
            ],
            [
                'id' => 2,
                'genre' => 'romance',
            ],
            [
                'id' => 3,
                'genre' => 'documentary',
            ],
            [
                'id' => 4,
                'genre' => 'action',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}