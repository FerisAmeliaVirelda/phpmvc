<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= Base_URL; ?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= Base_URL; ?>">
                <img src="<?= Base_URL; ?>/img/icon.png" alt="Logo" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-white" href="<?= Base_URL; ?>">Home <span class="sr-only" style="display:">(current)</span></a>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kompetensi Keahlian
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="rpl">RPL</a></li>
                                    <li><a class="dropdown-item" href="#">AKUNTANSI</a></li>
                                    <li><a class="dropdown-item" href="#">DPIB</a></li>
                                    <li><a class="dropdown-item" href="#">TP</a></li>
                                    <li><a class="dropdown-item" href="#">TKP</a></li>
                                    <li><a class="dropdown-item" href="#">TPTUP</a></li>
                                    <li><a class="dropdown-item" href="#">KULINER</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="nav-item nav-link  text-white" href="<?= Base_URL; ?>/guru">Data Guru</a>
                <a class="nav-item nav-link  text-white" href="<?= Base_URL; ?>/siswa">Data siswa</a>
                <a class="nav-item nav-link  text-white" href="<?= Base_URL; ?>/user/profile">About</a>
            </div>
        </div>
        </div>
    </nav>