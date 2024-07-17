<?php
require_once __DIR__ . '/system/app.php';

require_once __DIR__ . '/components/header.php';
require_once __DIR__ . '/components/navbar.php';
?>

<div class="booklist-section container my-4 pb-5">
    <h1 class="search-title">Daftar Buku Tersedia</h1>

    <div class="row justify-content-center mt-4">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="col-md-2">
                            <select class="form-control form-control-sm">
                                <option value="">
                                    --Semua Kategori--
                                </option>
                                <option value="">Fiksi</option>
                                <option value="">Ilmiah</option>
                            </select>
                        </div>
                        <div class="col-md-5 row">
                            <div class="col-9">
                                <input type="text" class="form-control form-control-sm" />
                            </div>
                            <div class="col-3">
                                <button class="btn btn-sm btn-primary">
                                    <i class="ti ti-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/12905869-L.jpg);
                                            "></div>
                                <h6 class="book-title">Pulang</h6>
                                <p class="text-muted book-author">
                                    Tere Liye
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://ia600505.us.archive.org/view_archive.php?archive=/35/items/l_covers_0014/l_covers_0014_60.zip&file=0014605125-L.jpg);
                                            "></div>
                                <h6 class="book-title">Komet Minor</h6>
                                <p class="text-muted book-author">
                                    Tere Liye
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/12886417-L.jpg);
                                            "></div>
                                <h6 class="book-title">
                                    Atomic Habits
                                </h6>
                                <p class="text-muted book-author">
                                    James Clear
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/7079796-L.jpg);
                                            "></div>
                                <h6 class="book-title">
                                    Laskar Pelangi
                                </h6>
                                <p class="text-muted book-author">
                                    Andrea Hirata
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/12905869-L.jpg);
                                            "></div>
                                <h6 class="book-title">Pulang</h6>
                                <p class="text-muted book-author">
                                    Tere Liye
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://ia600505.us.archive.org/view_archive.php?archive=/35/items/l_covers_0014/l_covers_0014_60.zip&file=0014605125-L.jpg);
                                            "></div>
                                <h6 class="book-title">Komet Minor</h6>
                                <p class="text-muted book-author">
                                    Tere Liye
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/12886417-L.jpg);
                                            "></div>
                                <h6 class="book-title">
                                    Atomic Habits
                                </h6>
                                <p class="text-muted book-author">
                                    James Clear
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/7079796-L.jpg);
                                            "></div>
                                <h6 class="book-title">
                                    Laskar Pelangi
                                </h6>
                                <p class="text-muted book-author">
                                    Andrea Hirata
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/12905869-L.jpg);
                                            "></div>
                                <h6 class="book-title">Pulang</h6>
                                <p class="text-muted book-author">
                                    Tere Liye
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://ia600505.us.archive.org/view_archive.php?archive=/35/items/l_covers_0014/l_covers_0014_60.zip&file=0014605125-L.jpg);
                                            "></div>
                                <h6 class="book-title">Komet Minor</h6>
                                <p class="text-muted book-author">
                                    Tere Liye
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/12886417-L.jpg);
                                            "></div>
                                <h6 class="book-title">
                                    Atomic Habits
                                </h6>
                                <p class="text-muted book-author">
                                    James Clear
                                </p>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-lg-3">
                            <div class="bg-white p-3 mx-auto text-center rounded">
                                <div class="book-cover mx-auto" style="
                                                background-image: url(https://covers.openlibrary.org/b/id/7079796-L.jpg);
                                            "></div>
                                <h6 class="book-title">
                                    Laskar Pelangi
                                </h6>
                                <p class="text-muted book-author">
                                    Andrea Hirata
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if (user()?->is_admin) : ?>
        <a href="add-book.php" class="btn btn-sm btn-success btn-float"><i class="ti ti-plus"></i></a>
    <?php endif; ?>
</div>

<?php require_once __DIR__ . '/components/footer.php' ?>
