<?php
require_once __DIR__ . '/system/app.php';

if (user()) header("Location: index.php");

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $user = get_user($email);

    if ($user) {
        if (password_verify($pass, $user->password)) {
            $_SESSION['user'] = $user;
            header("Location: index.php");
            exit;
        }
    }

    $errMsg = "Email atau Password Tidak Valid";
}

require_once __DIR__ . '/components/header.php';
?>

<div class="container login-section">
    <div class="row login-row">
        <div class="col-md-4 login-box">
            <p class="m-0 login-logo"><i class="ti ti-book-2"></i> DigiLib</p>
            <div class="card mt-4">
                <form class="card-body" method="POST">
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $email ?? '' ?>" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
            <p class="text-center"><small>Belum punya akun? <a href="register.php">Daftar</a></small></p>
        </div>
    </div>
</div>

<?php if (isset($errMsg)) : ?>
    <script>
        Swal.fire({
            icon: 'error',
            text: '<?= $errMsg ?>',
            timer: 1500,
        });
    </script>
<?php endif; ?>

<?php require_once __DIR__ . '/components/footer.php' ?>
