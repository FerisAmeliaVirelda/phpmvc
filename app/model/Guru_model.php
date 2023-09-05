<?php
class Guru_model
{
    private $table = "guru";
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }
    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = " INSERT INTO guru VALUES (NULL, :kode_guru, :nama_guru, :mapel, :prod_nonprod )";
        $this->db->query($query);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('prod_nonprod', $data['prod_nonprod']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusData($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function ubahData($data)
    {
        $query = "UPDATE siswa SET
            kode_guru = :kode_guru,
            nama_guru = :nama_guru,
            mapel = :mapel,
            prod_nonprod = :prod_nonprod
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('prod_nonprod', $data['prod_nonprod']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
