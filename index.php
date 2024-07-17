<?php
require_once __DIR__ . '/system/app.php';

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/navbar.php';
?>

<div class="container hero-section">
    <div class="row">
        <div class="col-lg-md-7 col-lg-5">
            <h1 class="hero-title">
                Temukan Buku Favorit Anda Secara Online
            </h1>
            <p class="text-muted hero-tagline">
                Lorem ipsum dolor sit, amet consectetur adipisicing
                elit. Maiores, harum fuga? Beatae ratione provident
                nihil iusto magnam adipisci inventore explicabo illum
                voluptas aut, distinctio nisi a qui harum, cupiditate
                eos.
            </p>
        </div>
        <div class="col-md-5 col-lg-7 d-flex justify-content-center align-items-center">
            <img src="assets/illusts/hero.svg" class="hero-image" />
        </div>
        <div class="col-12">
            <a href="#" class="btn btn-primary me-2"><i class="ti ti-player-play-filled"></i> Mulai</a>
            <a href="#" class="btn btn-secondary">Selengkapnya</a>
        </div>
    </div>
</div>

<div class="pt-2 pb-5" style="background-color: #f2f2f2">
    <div class="container home-book-list">
        <div class="row">
            <div class="col-md-6 row g-4">
                <div class="col-6">
                    <div class="bg-white p-3 mx-auto text-center rounded">
                        <div class="book-cover mx-auto" style="
                                        background-image: url(&quot;https://ia600505.us.archive.org/view_archive.php?archive=/35/items/l_covers_0014/l_covers_0014_60.zip&file=0014605125-L.jpg&quot;);
                                    "></div>
                        <h6 class="book-title">Komet Minor</h6>
                        <p class="text-muted book-author">Tere Liye</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-white p-3 mx-auto text-center rounded">
                        <div class="book-cover mx-auto" style="
                                        background-image: url(https://covers.openlibrary.org/b/id/7079796-L.jpg);
                                    "></div>
                        <h6 class="book-title">Laskar Pelangi</h6>
                        <p class="text-muted book-author">
                            Andrea Hirata
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-white p-3 mx-auto text-center rounded">
                        <div class="book-cover mx-auto" style="
                                        background-image: url(https://covers.openlibrary.org/b/id/12905869-L.jpg);
                                    "></div>
                        <h6 class="book-title">Pulang</h6>
                        <p class="text-muted book-author">Tere Liye</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="bg-white p-3 mx-auto text-center rounded">
                        <div class="book-cover mx-auto" style="
                                        background-image: url(https://covers.openlibrary.org/b/id/12886417-L.jpg);
                                    "></div>
                        <h6 class="book-title">Atomic Habits</h6>
                        <p class="text-muted book-author">
                            James Clear
                        </p>
                    </div>
                </div>
            </div>
            <div class="more-book-section col-md-6 d-flex justify-content-center flex-column gap-2">
                <h2>Terdiri dari Beberapa Genre dan Variasi Buku</h2>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit. Ad aperiam fugiat consequatur corporis aliquam
                    porro similique voluptate, exercitationem quo quasi.
                    Quo debitis necessitatibus eligendi ut iusto, aut
                    quia dignissimos praesentium?
                </p>
                <div>
                    <a href="" class="btn btn-outline-primary">Lihat Semua Buku
                        <i class="ti ti-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-7 d-flex justify-content-center align-items-center">
            <img src="assets/illusts/suggest.svg" width="45%" />
        </div>
        <div class="col-md-5">
            <h2 style="font-weight: bold; font-size: 1.5rem" class="mb-5">
                Kritik dan Saran
            </h2>
            <form action="" method="post" class="row">
                <div class="col-md-6">
                    <div class="mb-4">
                        <input type="text" class="form-control" placeholder="Masukkan Nama" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4">
                        <input type="email" class="form-control" placeholder="Email Anda" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-4">
                        <textarea name="" id="" class="form-control" placeholder="..." rows="8"></textarea>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary m-auto">
                            <i class="ti ti-send me-1"></i> Kirim
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/components/footer.php' ?>
