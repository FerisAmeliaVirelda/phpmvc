<body>
    <div class="container mt-5">
        <div class="row"> 
            <!-- d-flex justify-content-center -->
            <div class="col-6">
                <?php Flasher::flashh(); ?>
                <h3>Data Guru</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Data Guru
                </button>

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-driver">
                        <?php 
                        $no = 1;
                         ?>
                        <?php foreach ($data['guru'] as $guru) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $guru['nama_guru']; ?></td>
                                <td>
                                    <span><a href="<?= Base_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a></span>
                                    <span><a href="<?= Base_URL; ?>/guru/ubah/<?= $guru['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $guru['id']; ?>">ubah</a></span>
                                    <span><a href="<?= Base_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="badge badge-primary">detail</a></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Guru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= Base_URL; ?>/guru/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                            <label for="nama">Kode Guru</label>
                            <input type="text" class="form-control" id="kode_guru" name="kode_guru">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                        </div>
                        <div class="form-group">
                            <label form="mapel">Mapel</label>
                            <select class="form-control" id="mapel" name="mapel">
                                <option value="Matematika">Matematika</option>
                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                <option value="Bahasa Jepang">Bahasa Jepang</option>
                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                <option value="PPKn">PPKn</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="pemograman Web">Pemograman Web</option>
                                <option value="PBO">PBO</option>
                                <option value="PKWU">PKWU</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="golongan mapel">Golongan Mapel</label>
                            <select class="form-control" id="prod_nonprod" name="prod_nonprod">
                                <option value="Produktif">Produktif</option>
                                <option value="NonProduktif">Non Produktif</option>
                            </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                    <button type="button" class="btn btn-secondary" datadismiss="modal">Close</button>
                </div>
            </div>
        </div>
</body>