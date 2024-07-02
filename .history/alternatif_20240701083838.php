<!DOCTYPE html>
<html lang="en">

<?php require "layout/head.php"; ?>
<?php require "include/conn.php"; ?>

<body>
    <div id="app">
        <?php require "layout/sidebar.php"; ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>Alternatif</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tabel Alternatif</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text mb-0">Data-data mengenai kandidat yang akan dievaluasi di
                                        representasikan dalam tabel berikut:</p>
                                </div>
                                <button type="button" class="btn btn-outline-success btn-sm m-2" data-bs-toggle="modal"
                                    data-bs-target="#inlineForm">
                                    Tambah Alternatif
                                </button>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <caption>Tabel Alternatif A<sub>i</sub></caption>
                                        <thead class="table-dark">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th>Nama</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = 'SELECT id_alternative, name FROM saw_alternatives';
                                            $result = $db->query($sql);
                                            $i = 0;
                                            while ($row = $result->fetch_object()) {
                                                echo "<tr>
                                                        <td class='text-center'>" . (++$i) . "</td>
                                                        <td>{$row->name}</td>
                                                        <td class='text-center'>
                                                            <div class='btn-group'>
                                                                <button class='btn btn-primary btn-sm dropdown-toggle' type='button'
                                                                    id='dropdownMenuButton' data-bs-toggle='dropdown'
                                                                    aria-haspopup='true' aria-expanded='false'>
                                                                    Aksi
                                                                </button>
                                                                <div class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                                                    <a class='dropdown-item' href='alternatif-edit.php?id={$row->id_alternative}'>Edit</a>
                                                                    <a class='dropdown-item' href='alternatif-hapus.php?id={$row->id_alternative}'>Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>";
                                            }
                                            $result->free();
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require "layout/footer.php"; ?>
        </div>
    </div>

    <!-- Modal Tambah Alternatif -->
    <div class="modal fade" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel33">Tambah Alternatif</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="alternatif-simpan.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Kandidat:</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Masukkan Nama Kandidat..." required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php require "layout/js.php"; ?>
</body>

</html>

//tambahkan desain bagus dan animasi