<?php

class Buku extends Controller{
    public function index(){
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->model('Buku_model')->getAllBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id_buku){
        $data['judul'] = 'Detail Mahasiswa';
        $data['buku'] = $this->model('Buku_model')->getBukuById($id_buku);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if ($this->model('Buku_model')->tambahBuku($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahakan', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    public function hapus($id_buku){
        if ($this->model('Buku_model')->hapusBuku($id_buku) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

    public function ubah($id_buku){
        if ($this->model('Buku_model')->updateBuku($id_buku) > 0){
            Flasher::setFlash('berhasil', 'diupdate', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        } else{
            Flasher::setFlash('gagal', 'diupdate', 'success');
            header('Location: ' . BASEURL . '/buku');
            exit;
        }
    }

}