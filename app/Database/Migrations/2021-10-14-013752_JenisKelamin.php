<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisKelamin extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => TRUE,
        'auto_increment' => TRUE,
      ],
      'uraian'       => [
        'type'       => 'VARCHAR',
        'constraint' => 50,
      ],
      'created_at' => [
        'type' => 'DATETIME',
        'null' => TRUE,
      ],
      'updated_at' => [
        'type' => 'DATETIME',
        'null' => TRUE,
      ],
    ]);
    $this->forge->addKey('id', TRUE);
    $this->forge->createTable('jenis_kelamin');
  }

  public function down()
  {
    $this->forge->dropTable('jenis_kelamin');
  }
}
