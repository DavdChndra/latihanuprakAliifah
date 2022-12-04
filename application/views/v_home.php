<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #E6E5A3;">
    <nav class="navbar navbar-expand-lg" style="background-color: #497174;">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-light" href="">Library</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page"
                            href="<?= base_url('perpus/create') ?>">Pinjam
                            Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('perpus')?>">Data Peminjaman</a>
                    </li>
                </ul>
            </div>
            <li class="nav-item d-flex">
                <a class="btn btn-danger" href="<?= base_url()?>">Logout</a>
            </li>
        </div>
    </nav>
    <div class="d-flex justify-content-center bd-highlight mb-3" style="margin-top:50px">
        <div class="p-2 bd-highlight">
            <h3 style="font-weight: 600;">Data Peminjaman Buku</h3>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row d-flex justify-contrnt-center">
            <div class="col-12">
                <div class="card p-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Kode Buku</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Waktu Pinjam</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no=1;
                          foreach ($peminjam as $p):
                          ?>
                            <tr>
                                <th><?php echo $no++; ?></th>
                                <td><?= $p->nama; ?></td>
                                <td><?= $p->nik; ?></td>
                                <td><?= $p->kode_buku; ?></td>
                                <td><?= $p->nama_buku; ?></td>
                                <td><?= $p->waktu_peminjaman; ?></td>
                                <td>
                                    <a href="<?= base_url('perpus/edit/'.$p->id) ?>"
                                        class="btn btn-sm btn-warning text-light">Edit</a>
                                    <a href="<?= base_url('perpus/destroy/'.$p->id) ?>"
                                        class="btn btn-sm btn-success">Kembalikan</a>
                                </td>
                            </tr>

                            <?php
                          endforeach;
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>


</html>