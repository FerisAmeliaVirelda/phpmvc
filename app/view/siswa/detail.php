<div class="container mt-5">
    <div class="card" style="width: 30rem;">
        <h4 class="card-header">
            Data Siswa
        </h4>
        <div class="card-body">
            <h5 class="card-title">Nama : <?= $data['siswa']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Jenis Kelamin : <?= $data['siswa']['jenis_kelamin']; ?></h6>
            <h6 class="card-subtitle mb-2 text-muted">Alamat : <?= $data['siswa']['alamat']; ?></h6>
            <a href="<?= Base_URL; ?>/siswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>