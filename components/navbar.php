<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container py-2">
        <a class="navbar-brand" href="#"><i class="ti ti-book-2 me-1"></i> DigiLib</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-4">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="books.php">Daftar Buku</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Fiksi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Teknologi</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Psikologi</a>
                        </li>
                    </ul>
                </li>
                <?php if (!user()) : ?>
                    <li class="nav-item">
                        <a href="login.php" class="btn btn-primary">Masuk</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
