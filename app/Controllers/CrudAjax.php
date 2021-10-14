<?php

namespace App\Controllers;
use App\Models\CrudAjaxModel;

class CrudAjax extends BaseController
{

  // protected $CrudAjaxModel;

  // public function __construct()
  // {
  //   $this->CrudAjaxModel = new CrudAjaxModel();
  // }

  public function index()
  {
    $data = [
      'title' => 'Home | Crud Ajax',
      'content' => 'crud/index'
    ];

    return view('templates/body', $data);
  }

  public function table_mahasiswa()
  {
    $model = new CrudAjaxModel();
    $data = [
      'mahasiswa' => $model->getMahasiswa(),
    ];
    echo view('crud/table_mahasiswa', $data);
  }
}