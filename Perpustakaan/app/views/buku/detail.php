<div class="container mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['buku']['nama_buku']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['buku']['penulis']; ?></h6>
            <p class="card-text"><?= $data['buku']['status']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>