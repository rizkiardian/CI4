<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LevelUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_level' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_level' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id_level', true);
        $this->forge->createTable('LevelUser');
    }

    public function down()
    {
        //
    }
}
