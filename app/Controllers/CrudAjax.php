<?php

namespace App\Controllers;
use App\Models\CrudAjax;

class CrudAjax extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Crud Ajax',
      'content' => 'crud_ajax/index'
    ];

    return view('templates/body', $data);
  }
}
