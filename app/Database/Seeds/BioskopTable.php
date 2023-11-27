<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BioskopTable extends Seeder
{
    private $table = 'bioskop';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_film_id' => 1,
                'durasi' => '120 menit',
                'genre_id' => 1,
                'harga_tiket' => 40000,
                'nomor_kursi_id' => 4,
                'cemilan_id' => 2,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
