<?php

class Buku_model{
    private $table = 'buku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBukuById($id_buku){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_buku = :id_buku');
        $this->db->bind('id_buku', $id_buku);
        return $this->db->single();
    }

    public function tambahBuku($data){
        $query = "INSERT INTO buku
                    VALUES 
                    ('', :nama_buku, :penulis, :status)";

        $this->db->query($query);

        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusBuku($id_buku){
        $query = "DELETE FROM buku WHERE id_buku = :id_buku";
        $this->db->query($query);
        $this->db->bind('id_buku', $id_buku);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateBuku($data){
        $query = "UPDATE buku SET 
                    nama = :nama_buku, 
                    penulis = :penulis, 
                    status = :status";

        $this->db->query($query);

        $this->db->bind('nama_buku', $data['nama_buku']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}