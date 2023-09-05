<div class="container mt-5">
  <div class="card" style="width: 30rem;">
    <h4 class="card-header">
      Data Guru
    </h4>
    <div class="card-body">
      <h6 class="card-title">Kode Guru : <?= $data['guru']['kode_guru']; ?></h6>
      <h5 class="card-title">Nama : <?= $data['guru']['nama_guru']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted">Mapel : <?= $data['guru']['mapel']; ?></h6>
      <h6 class="card-subtitle mb-2 text-muted">Golongan Mapel : <?= $data['guru']['prod_nonprod']; ?></h6>
      <a href="<?= Base_URL; ?>/guru" class="card-link">Kembali</a>
    </div>
  </div>
</div>