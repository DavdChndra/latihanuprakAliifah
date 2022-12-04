<html>

<head>
    <title>Halaman Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #E6E5A3;">
    <div class="container mt-5">
        <div class="row">
            <div class="card m-auto d-block col-6 mt-5" style="background-color: #497174;">
                <h2 class="text-center text-light mt-5">
                    Form Login
                </h2>
                <hr>
                <div class="card-body">
                    <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger" role="alert">';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('success_register') != '') {
                        echo '<div class="alert alert-info" role="alert">';
                        echo $this->session->flashdata('success_register');
                        echo '</div>';
                    }
                    ?>
                    <form method="post" action="<?php echo base_url(); ?>login/proses">
                        <div class="form-group mb-3 text-light">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Masukan Username Anda" autocomplete="off">
                        </div>
                        <div class="form-group mb-3 text-light">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Masukan Password Anda">
                        </div>
                        <button type="submit" class="btn btn-danger">Login</button>
                        <a class="btn btn-primary" href="<?php base_url(); ?>register">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>