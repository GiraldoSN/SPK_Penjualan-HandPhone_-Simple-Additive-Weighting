<!DOCTYPE html>
<html lang="en">

<?php
require "layout/head.php";
require "include/conn.php";
?>

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
        <h3>Matriks Keputusan (X) & Ternormalisasi (R)</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Matriks Keputusan (X)</h4>
              </div>
              <div class="card-body">
                <p class="card-text">
                  Melakukan perhitungan normalisasi untuk mendapatkan matriks nilai ternormalisasi (R), dengan ketentuan:
                  <br>
                  Jika faktor/kriteria bertipe cost, gunakan rumus: Rij = ( min{Xij} / Xij)
                  <br>
                  Jika faktor/kriteria bertipe benefit, gunakan rumus: Rij = ( Xij/max{Xij} )
                </p>
                <button type="button" class="btn btn-outline-success btn-sm mb-3" data-bs-toggle="modal"
                  data-bs-target="#inlineForm">
                  Isi Nilai Alternatif
                </button>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <caption>Matriks Keputusan (X)</caption>
                    <thead class="table-dark">
                      <tr>
                        <th rowspan='2' class="align-middle">Alternatif</th>
                        <th colspan='5' class="text-center">Kriteria</th>
                        <th class="align-middle">Action</th>
                      </tr>
                      <tr>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql = "SELECT
                                  a.id_alternative,
                                  b.name,
                                  SUM(IF(a.id_criteria=1,a.value,0)) AS C1,
                                  SUM(IF(a.id_criteria=2,a.value,0)) AS C2,
                                  SUM(IF(a.id_criteria=3,a.value,0)) AS C3,
                                  SUM(IF(a.id_criteria=4,a.value,0)) AS C4,
                                  SUM(IF(a.id_criteria=5,a.value,0)) AS C5
                              FROM
                                  saw_evaluations a
                              JOIN saw_alternatives b USING(id_alternative)
                              GROUP BY a.id_alternative
                              ORDER BY a.id_alternative";
                      $result = $db->query($sql);
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
                        echo "<tr>
                                  <td>A<sub>{$row->id_alternative}</sub> {$row->name}</td>
                                  <td>{$matrix[$row->id_alternative]['C1']}</td>
                                  <td>{$matrix[$row->id_alternative]['C2']}</td>
                                  <td>{$matrix[$row->id_alternative]['C3']}</td>
                                  <td>{$matrix[$row->id_alternative]['C4']}</td>
                                  <td>{$matrix[$row->id_alternative]['C5']}</td>
                                  <td>
                                    <a href='keputusan-hapus.php?id={$row->id_alternative}' class='btn btn-danger btn-sm'>Hapus</a>
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

        <section class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Matriks Ternormalisasi (R)</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <caption>Matriks Ternormalisasi (R)</caption>
                    <thead class="table-dark">
                      <tr>
                        <th rowspan='2' class="align-middle">Alternatif</th>
                        <th colspan='5' class="text-center">Kriteria</th>
                      </tr>
                      <tr>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($matrix as $id => $values) {
                        $R = array(
                          'C1' => $minC1 / $values['C1'],  // Cost
                          'C2' => $values['C2'] / $maxC2,  // Benefit
                          'C3' => $values['C3'] / $maxC3,  // Benefit
                          'C4' => $values['C4'] / $maxC4,  // Benefit
                          'C5' => $values['C5'] / $maxC5   // Benefit
                        );
                        echo "<tr>
                                  <td>A{$id}</td>
                                  <td>" . round($R['C1'], 2) . "</td>
                                  <td>" . round($R['C2'], 2) . "</td>
                                  <td>" . round($R['C3'], 2) . "</td>
                                  <td>" . round($R['C4'], 2) . "</td>
                                  <td>" . round($R['C5'], 2) . "</td>
                                </tr>";
                      }
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

  <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel33">Isi Nilai Kandidat</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="matrik-simpan.php" method="POST">
          <div class="modal-body">
            <label>Name:</label>
            <div class="form-group">
              <select class="form-control" name="id_alternative">
                <?php
                $sql = 'SELECT id_alternative,name FROM saw_alternatives';
                $result = $db->query($sql);
                while ($row = $result->fetch_object()) {
                  echo '<option value="' . $row->id_alternative . '">' . $row->name . '</option>';
                }
                $result->free();
                ?>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <label>Criteria:</label>
            <div class="form-group">
              <select class="form-control" name="id_criteria">
                <?php
                $sql = 'SELECT * FROM saw_criterias';
                $result = $db->query($sql);
                while ($row = $result->fetch_object()) {
                  echo '<option value="' . $row->id_criteria . '">' . $row->criteria . '</option>';
                }
                $result->free();
                ?>
              </select>
            </div>
          </div>
          <div class="modal-body">
            <label>Value:</label>
            <div class="form-group">
              <input type="text" name="value" placeholder="Value..." class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary ml-1">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php require "layout/js.php"; ?>
</body>

</html>
