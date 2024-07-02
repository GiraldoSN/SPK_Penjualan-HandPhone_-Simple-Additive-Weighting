<?php
require "include/conn.php";

// Fetching data based on ID from the URL
$id = $_GET['id'];
$sql = "SELECT * FROM saw_criterias WHERE id_criteria = '$id'";
$result = $db->query($sql);
$row = $result->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">

<?php require "layout/head.php"; ?>

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
                <h3>Edit Bobot Kriteria</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header bg-info text-white">
                                <h4 class="card-title">Form Edit Data</h4>
                            </div>
                            <div class="card-body">
                                <form action="bobot-edit-act.php" method="POST">
                                    <div class="mb-3">
                                        <label for="criteria" class="form-label">Kriteria</label>
                                        <input type="text" class="form-control" id="criteria" name="criteria" value="<?= $row['criteria']; ?>" required>
                                        <input type="hidden" name="id_criteria" value="<?= $row['id_criteria']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="weight" class="form-label">Bobot</label>
                                        <input type="text" class="form-control" id="weight" name="weight" value="<?= $row['weight']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="attribute" class="form-label">Atribut</label>
                                        <select class="form-select" id="attribute" name="attribute" required>
                                            <option value="benefit" <?= ($row['attribute'] == 'benefit') ? 'selected' : ''; ?>>Benefit</option>
                                            <option value="cost" <?= ($row['attribute'] == 'cost') ? 'selected' : ''; ?>>Cost</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-rounded">Simpan Perubahan</button>
                                </form>
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
