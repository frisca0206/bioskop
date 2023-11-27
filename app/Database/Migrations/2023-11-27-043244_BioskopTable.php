<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BioskopTable extends Migration
{
    private $table = 'bioskop'; 

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_film_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'durasi' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'genre_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'harga_tiket' => [
                'type' => 'int',
            ],
            'nomor_kursi_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'cemilan_id' => [
                'type' => 'int',
                'unsigned' => true, 
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('nama_film_id', 'film', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('genre_id', 'genre', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('nomor_kursi_id', 'kursi', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('cemilan_id', 'cemilan', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
