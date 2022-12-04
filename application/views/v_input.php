<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body style="background-color: #497174; font-family:poppins;">
    <div class="mx-auto mt-5" style="width: 800px;">
        <div class="header" style="text-align: left; margin-top: 30px; margin-bottom: 30px;">
            <h1 style="text-align:center; font-weight:700; color:#ffffff">Silahkan Isi Data Dibawah Ini</h1>
        </div>

        <form method="post" action="<?= base_url('perpus/store') ?>">
            <div class="formisi" style="color: white; font-size:18px; font-weight:550;">
                <div class="mb-3">
                    <label for="nama" class="form-label mt-3">Nama :</label>
                    <input type="text" name="nama" class="form-control" style="background-color: white;"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Anda"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="nik" class="form-label">NIK :</label>
                    <input type="text" name="nik" class="form-control" style="background-color: white;"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIK Anda"
                        autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="bookcode" class="form-label">Kode Buku :</label>
                    <input type="text" name="kode_buku" class="form-control" style="background-color: white;"
                        id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Masukan Kode Buku Yang Anda Pinjam" autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="bookname" class="form-label">Nama Buku :</label>
                    <input type="text" name="nama_buku" class="form-control" style="background-color: white;"
                        id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Masukan Nama Buku Yang Anda Pinjam" autocomplete="off">
                </div>
                <br>
                <button type="submit" class="btn btn-primary"
                    style="width: 800px; font-size:18px; font-weight:600;">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>