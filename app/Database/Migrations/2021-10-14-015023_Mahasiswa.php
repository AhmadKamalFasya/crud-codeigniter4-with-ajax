<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
      ],
      'nim'       => [
        'type'       => 'VARCHAR',
        'constraint' => '9',
      ],
      'jenis_kelamin' => [
        'type' => 'VARCHAR',
        'constraint' => '15',
      ],
      'created_at' => [
        'type' => 'DATETIME',
        'null' => true,
      ],
      'updated_at' => [
        'type' => 'DATETIME',
        'null' => true,
      ],

    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('mahasiswa');
  }

  public function down()
  {
    $this->forge->dropTable('mahasiswa');
  }
}
