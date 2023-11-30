<?php

namespace App\Controllers;

use App\Core\Controller;

class pelanggan extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\pelanggan();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('pelanggan/index', $data);
     }

     public function input()
     {
          // Membuat option pelanggan
          $data['optcat'] = $this->model->optcat();

          $this->dashboard('pelanggan/input', $data);
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/pelanggan');
     }

     public function edit($id)
     {
          // Menampilkan data edit
          $data['row'] = $this->model->edit($id);

          // Membuat option pelanggan
          $data['optcat'] = $this->model->optcat();

          $this->dashboard('pelanggan/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/pelanggan');
     }

     public function delete($id)
     {
          $this->model->delete($id);
          header('location:' . URL . '/pelanggan');
     }
}
