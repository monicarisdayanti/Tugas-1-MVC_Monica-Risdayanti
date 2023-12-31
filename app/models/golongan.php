<?php

namespace App\Models;

use App\Core\Model;

class golongan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_golongan";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          try {
          $gol_kode = $_POST['gol_kode'];
          $gol_nama = $_POST['gol_nama'];


          $query = "INSERT INTO tb_golongan 
            SET gol_kode=:gol_kode, gol_nama=:gol_nama";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_nama", $gol_nama);

          $stmt->execute();
     }    catch (\PDOException $e) {
          echo "Error: " . $e->getMessage();
     }
}

     public function edit($id)
     {
          $query = "SELECT * FROM tb_golongan WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
     try {
          $gol_kode = $_POST['gol_kode'];
          $gol_nama = $_POST['gol_nama'];
          $id = $_POST['gol_id'];

          $query = "UPDATE tb_golongan SET gol_kode=:gol_kode, gol_nama=:gol_nama WHERE gol_id=:gol_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_nama", $gol_nama);
          $stmt->bindParam(":gol_id", $id);

          $stmt->execute();
     } catch (\PDOException $e) {
          echo "Error:" . $e->getMessage();
     
     }
}
}
