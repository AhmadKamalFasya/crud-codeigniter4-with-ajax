<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class JenisKelaminSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'id' => 1,
        'uraian'     => 'Laki-laki',
        'created_at' => TIME::now(),
        'updated_at' => TIME::now(),
      ],
      [
        'id' => 2,
        'uraian'    => 'perempuan',
        'created_at' => TIME::now(),
        'updated_at' => TIME::now(),
      ],
    ];

    // Using Query Builder
    $this->db->table('jenis_kelamin')->insertBatch($data);
  }
}
