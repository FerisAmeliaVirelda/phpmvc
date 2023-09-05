<?php
class siswa extends Controller
{
    public function index()
    {
        $data['judul'] = "Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = "Detail Siswa";
        $data['siswa'] = $this->model("Siswa_model")->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', ' ditambahkan', 'success');
            header('Location: ' . Base_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', ' ditambahkan', 'danger');
            header('Location: ' . Base_URL . '/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusData($id) > 0) {
            Flasher::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . Base_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . Base_URL . '/siswa');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }
    public function ubah()
    {
        if ($this->model('Siswa_model')->ubahData($_POST) > 0) {
            Flasher::setFlash('berhasil', ' diubah', 'success');
            header('Location: ' . Base_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', ' diubah', 'danger');
            header('Location: ' . Base_URL . '/siswa');
            exit;
        }
    }
}
