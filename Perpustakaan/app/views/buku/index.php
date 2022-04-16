<div class="container mt-4">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah Data Buku
            </button>
            <br></br>
            <h3>Daftar Buku</h3>
            <ul class="list-group">
                <?php foreach($data['buku'] as $buku) : ?>            
                    <li class="list-group-item ">
                        <?= $buku['nama_buku']; ?>

                        <a href="<?= BASEURL ?>/buku/hapus/<?= $buku['id_buku'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
                        
                        <a href="<?= BASEURL ?>/buku/ubah/<?= $buku['id_buku'] ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $buku['id_buku']; ?>">Ubah</a>
                        
                        <a href="<?= BASEURL ?>/buku/detail/<?= $buku['id_buku'] ?>" class="badge badge-primary float-right ml-1">Detail</a>
                    </li>                
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <form action="<?= BASEURL ?>/buku/tambah" method="post">
                <div class="form-group">
                    <label for="nama_buku">Nama</label>
                    <input name="nama_buku" type="text" class="form-control" id="nama" placeholder="">
                </div>

                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input name="penulis" type="text" class="form-control" id="nim" placeholder="">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input name="status" type="text" class="form-control" id="angkatan" placeholder="">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
  </div>
</div>
