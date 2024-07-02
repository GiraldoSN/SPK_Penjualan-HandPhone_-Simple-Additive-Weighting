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
                <h3 class="text-primary">Bobot Kriteria</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: #96C9F4; color: white;">
                                <h4 class="card-title">Tabel Bobot Kriteria</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Pengambil keputusan memberi bobot preferensi dari setiap kriteria dengan masing-masing jenisnya (keuntungan/benefit atau biaya/cost):</p>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <caption>Tabel Kriteria C<sub>i</sub></caption>
                                        <thead style="background-color: #96C9F4; color: white;">
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Simbol</th>
                                                <th>Kriteria</th>
                                                <th>Bobot</th>
                                                <th>Atribut</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = 'SELECT id_criteria, criteria, weight, attribute FROM saw_criterias';
                                            $result = $db->query($sql);
                                            $i = 0;
                                            while ($row = $result->fetch_object()) {
                                                $i++;
                                                echo "<tr>
                                                        <td class='text-center'>$i</td>
                                                        <td class='text-center'>C$i</td>
                                                        <td>{$row->criteria}</td>
                                                        <td>{$row->weight}</td>
                                                        <td>{$row->attribute}</td>
                                                        <td class='text-center'>
                                                            <a href='bobot-edit.php?id={$row->id_criteria}' class='btn btn-info btn-sm'>Edit</a>
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
    <?php require "layout/js.php"; ?>
</body>

</html>
