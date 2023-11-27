<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FilmTable extends Seeder
{
    private $table = 'film';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_film' => 'saranjana',
                'deskripsi' => 'kota gaib di Kalimantan',
            ],
            [
                'id' => 2,
                'nama_film' => '172 days',
                'deskripsi' => 'perjalanan seorang perempuan bernama Nadzira Shafa yang memutuskan untuk
                                berhijrah lalu bertemu dengan seorang ustadz bernama Ameer Azzikra',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
