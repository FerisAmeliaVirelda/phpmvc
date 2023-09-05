<body>
    <div class="container mt-5">
        <div class="row"> 
            <!-- d-flex justify-content-center -->
            <div class="col-6">
                <?php Flasher::flash(); ?>
                <h3>Data Siswa</h3>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Tambah Data Siswa
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
                        <?php foreach ($data['siswa'] as $siswa) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $siswa['nama']; ?></td>
                                <td>
                                    <span><a href="<?= Base_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">hapus</a></span>
                                    <span><a href="<?= Base_URL; ?>/siswa/ubah/<?= $siswa['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#staticBackdrop" data-id="<?= $siswa['id']; ?>">ubah</a></span>
                                    <span><a href="<?= Base_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="badge badge-primary">detail</a></span>
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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= Base_URL; ?>/siswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id"> 
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                    <button type="button" class="btn btn-secondary" datadismiss="modal">Close</button>
                </div>
            </div>
        </div>
</body>