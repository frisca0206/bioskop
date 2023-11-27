<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CemilanTable extends Seeder
{
    private $table = 'cemilan';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'cemilan' => 'ice milo + popcorn',
            ],
            [
                'id' => 2,
                'cemilan' => 'cola + popcorn',
            ],
            [
                'id' => 3,
                'cemilan' => 'pepsi',
            ],
            [
                'id' => 4,
                'cemilan' => 'ice milo',
            ],
            [
                'id' => 5,
                'cemilan' => 'mineral water',
            ],
            [
                'id' => 6, 
                'cemilan' => 'popcorn (sweet, salty, mixed)',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
