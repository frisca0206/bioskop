<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KursiTable extends Seeder
{
    private $table = 'kursi';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nomor_kursi' => 'A1',
            ],
            [
                'id' => 2,
                'nomor_kursi' => 'A2',
            ],
            [
                'id' => 3,
                'nomor_kursi' => 'A3',
            ],
            [
                'id' => 4,
                'nomor_kursi' => 'A4',
            ],
            [
                'id' => 5,
                'nomor_kursi' => 'A5',
            ],
            [
                'id' => 6,
                'nomor_kursi' => 'B1',
            ],
            [
                'id' => 7,
                'nomor_kursi' => 'B2',
            ],
            [
                'id' => 8,
                'nomor_kursi' => 'B3',
            ],
            [
                'id' => 9,
                'nomor_kursi' => 'B4',
            ],
            [
                'id' => 10,
                'nomor_kursi' => 'B5',
            ],
            [
                'id' => 11,
                'nomor_kursi' => 'C1',
            ],
            [
                'id' => 12,
                'nomor_kursi' => 'C2',
            ],
            [
                'id' => 13,
                'nomor_kursi' => 'C3',
            ],
            [
                'id' => 14,
                'nomor_kursi' => 'C4',
            ],
            [
                'id' => 15,
                'nomor_kursi' => 'C5',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
