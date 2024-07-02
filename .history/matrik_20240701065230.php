<?php
require "layout/head.php";
require "include/conn.php";

$sql = "SELECT
    a.id_alternative,
    b.name,
    SUM(IF(a.id_criteria=1,a.value,0)) AS C1,
    SUM(IF(a.id_criteria=2,a.value,0)) AS C2,
    SUM(IF(a.id_criteria=3,a.value,0)) AS C3,
    SUM(IF(a.id_criteria=4,a.value,0)) AS C4,
    SUM(IF(a.id_criteria=5,a.value,0)) AS C5
    FROM saw_evaluations a
    JOIN saw_alternatives b USING(id_alternative)
    GROUP BY a.id_alternative
    ORDER BY a.id_alternative";
$result = $db->query($sql);
$X = array(1 => array(), 2 => array(), 3 => array(), 4 => array(), 5 => array());
$matrix = array();
while ($row = $result->fetch_object()) {
    $matrix[$row->id_alternative] = array(
        'name' => $row->name,
        'C1' => round($row->C1, 2),
        'C2' => round($row->C2, 2),
        'C3' => round($row->C3, 2),
        'C4' => round($row->C4, 2),
        'C5' => round($row->C5, 2)
    );
    array_push($X[1], $matrix[$row->id_alternative]['C1']);
    array_push($X[2], $matrix[$row->id_alternative]['C2']);
    array_push($X[3], $matrix[$row->id_alternative]['C3']);
    array_push($X[4], $matrix[$row->id_alternative]['C4']);
    array_push($X[5], $matrix[$row->id_alternative]['C5']);
}
$result->free();

$minC1 = min($X[1]);
$maxC2 = max($X[2]);
$maxC3 = max($X[3]);
$maxC4 = max($X[4]);
$maxC5 = max($X[5]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #96C9F4; /* Light blue */
            border-radius: 10px 10px 0 0;
            color: #fff; /* White text */
        }

        .card-title {
            margin-bottom: 0;
        }

        .card-body {
            padding: 20px;
        }

        .card-text {
            text-align: justify;
        }

        .btn-outline-success {
            color: #96C9F4;
            border-color: #96C9F4;
        }

        .btn-outline-success:hover {
            background-color: #96C9F4;
            color: #fff;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th, .table td {
            text-align: center;
        }

        .modal-content {
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div id="app">
        <?php require "layout/sidebar.php";?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <h3>Matrik</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Matriks Keputusan (X) &amp; Ternormalisasi (R)</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <p class="card-text">Melakukan perhitungan normalisasi untuk mendapatkan matriks nilai ternormalisasi (R), dengan ketentuan:
                                        Untuk normalisasi nilai, jika faktor/attribute kriteria bertipe cost maka digunakan rumusan: Rij = ( min{Xij} / Xij), sedangkan jika faktor/attribute kriteria bertipe benefit maka digunakan rumusan: Rij = ( Xij/max{Xij} )</p>
                                </div>
                                <button type="button" class="btn btn-outline-success btn-sm m-2" data-toggle="modal" data-target="#inlineForm">
                                    Isi Nilai Alternatif
                                </button>
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0">
                                        <caption>Matrik Keputusan(X)</caption>
                                        <tr>
                                            <th rowspan='2'>Alternatif</th>
                                            <th colspan='5'>Kriteria</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                            <th></th>
                                        </tr>
                                        <?php
                                        foreach ($matrix as $id => $values) {
                                            echo "<tr>
                                                    <th>A{$id} {$values['name']}</th>
                                                    <td>{$values['C1']}</td>
                                                    <td>{$values['C2']}</td>
                                                    <td>{$values['C3']}</td>
                                                    <td>{$values['C4']}</td>
                                                    <td>{$values['C5']}</td>
                                                    <td><a href='keputusan-hapus.php?id={$id}' class='btn btn-danger btn-sm'>Hapus</a></td>
                                                </tr>";
                                        }
                                        ?>
                                    </table>
                                </div>

                                <div class="table-responsive mt-4">
                                    <table class="table table-striped mb-0">
                                        <caption>Matrik Ternormalisasi (R)</caption>
                                        <tr>
                                            <th rowspan='2'>Alternatif</th>
                                            <th colspan='5'>Kriteria</th>
                                        </tr>
                                        <tr>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                        </tr>
                                        <?php
                                        foreach ($R as $id => $values) {
                                            echo "<tr>
                                                    <th>A{$id}</th>
                                                    <td>" . round($values['C1'], 2) . "</td>
                                                    <td>" . round($values['C2'], 2) . "</td>
                                                    <td>" . round($values['C3'], 2) . "</td>
                                                    <td>" . round($values['C4'], 2) . "</td>
                                                    <td>" . round($values['C5'], 2) . "</td>
                                                </tr>";
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require "layout/footer.php";?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Isi Nilai Kandidat</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="matrik-simpan.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="id_alternative">Name:</label>
                            <select class="form-control" id="id_alternative" name="id_alternative">
                                <?php
                                $sql = 'SELECT id_alternative, name FROM saw_alternatives';
                                $result = $db->query($sql);
                                while ($row = $result->fetch_object()) {
                                    echo "<option value='{$row->id_alternative}'>{$row->name}</option>";
                                }
                                $result->free();
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_criteria">Criteria:</label>
                            <select class="form-control" id="id_criteria" name="id_criteria">
                                <?php
                                $sql = 'SELECT id_criteria, criteria FROM saw_criterias';
                                $result = $db->query($sql);
                                while ($row = $result->fetch_object()) {
                                    echo "<option value='{$row->id_criteria}'>{$row->criteria}</option>";
                                }
                                $result->free();
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="value">Value:</label>
                            <input type="text" class="form-control" id="value" name="value" placeholder="Value..." required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
