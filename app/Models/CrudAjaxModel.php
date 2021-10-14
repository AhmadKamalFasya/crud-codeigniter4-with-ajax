<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudAjaxModel extends Model
{
  protected $table = 'mahasiswa';
  protected $useTimestamps = true;

  public function getMahasiswa($id = false)
  {
    if($id == false){
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }

  public function updateMahasiswa($id, $data)
  {
    $update = $this->db->table($this->table)->update($data, array('id'=>$id));

    return $update;
  }

  public function insertMahasiswa($data)
  {
    $simpan = $this->db->table($this->table)->insert($data);

    return $simpan ;
  } 

  public function deleteMahasiswa($id, $data)
  {
    $delete = $this->db->table($this->table)->delete($data, array('id'=>$id));

    return $delete;
  }


}