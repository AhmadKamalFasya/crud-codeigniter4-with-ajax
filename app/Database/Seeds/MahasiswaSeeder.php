<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'id' => 1,
        'nim'        => 'C1S13212',
        'nama'       => 'Ahmad',
        'jenis_kelamin' => 'Laki-laki',
        'created_at' => TIME::now(),
        'updated_at' => TIME::now(),
      ],
      [
        'id' => 2,
        'nim'    => 'C1S13213',
        'nama'      => 'Anggun',
        'jenis_kelamin' => 'Perempuan',
        'created_at' => TIME::now(),
        'updated_at' => TIME::now(),
      ],
    ];

    // Using Query Builder
    $this->db->table('mahasiswa')->insertBatch($data);
  }
}
