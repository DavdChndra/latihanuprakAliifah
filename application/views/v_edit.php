<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #497174; font-family:poppins;">
    <div class="mx-auto mt-5" style="width: 800px;">
        <div class="header" style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
            <h1 style="text-align:center; font-weight:700; color:#ffffff">Silahkan Ubah Data Dibawah Ini</h1>
        </div>

        <div class="form" style="font-weight: 700;">
            <?php foreach ($user as $u) { ?>
            <form action="<?= base_url("perpus/update/".$u->id) ?>" method="post">
                <div class="formisi" style="color: white; font-size:18px; font-weight:550;">
                    <div class="mb-3">
                        <label for="nama" class="form-label mt-3">Nama :</label>
                        <input type="hidden" name="id" value="<?= $u->id ?>" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        <input type="text" name="nama" value="<?= $u->nama ?>" class="form-control" id="nama"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK :</label>
                        <input type="text" name="nik" value="<?= $u->nik ?>" class="form-control" id="nik"
                            autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="kodebuku" class="form-label">Kode Buku :</label>
                        <input type="text" name="kode_buku" value="<?= $u->kode_buku ?>" class="form-control"
                            id="bookcode" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="bookname" class="form-label">Nama Buku :</label>
                        <input type="text" name="nama_buku" value="<?= $u->nama_buku ?>" class="form-control"
                            id="bookname" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary mt-3"
                        style="width: 800px; font-size:18px; font-weight:600;">Submit</button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>


</html>