<?php

require_once __DIR__ . "/system/app.php";

if (isset($_POST["submit"])) {
    create_user($_POST);
    header("Location: login.php");
}

require_once __DIR__ . "/components/header.php";
require_once __DIR__ . "/components/navbar.php";
?>

<div class="container register-section">
    <div class="row">
        <div class="col-md-7 d-flex justify-content-center align-items-center">
            <img src="assets/illusts/register.svg" width="50%" class="register-illust">
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Daftar</h5>
                    <form action="" method="post">
                        <div class="mb-4">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-4 row">
                            <div class="col-md-6">
                                <label for="Email">Email</label>
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                            <div class="col-md-6">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="address">Alamat</label>
                            <textarea name="address" id="address" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="text-end">
                            <input type="submit" class="btn btn-primary" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . "/components/footer.php"; ?>
