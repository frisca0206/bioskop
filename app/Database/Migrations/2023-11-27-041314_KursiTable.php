<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KursiTable extends Migration
{
    private $table = 'kursi';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nomor_kursi' => [
                'type' => 'varchar',
                'constraint' => 30,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
