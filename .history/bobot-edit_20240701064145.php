<?php
require "include/conn.php";

// Fetching data based on ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';
if (!empty($id)) {
    $sql = "SELECT * FROM saw_criterias WHERE id_criteria = '$id'";
    $result = $db->query($sql);
    $row = $result->fetch_array();
} else {
    // Handle error if ID is not provided or invalid
    die('Invalid ID.');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bobot Kriteria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
            font-family: 'Arial', sans-serif;
        }

        .card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #96C9F4; /* Light blue background */
            border-radius: 10px 10px 0 0;
        }

        .card-title {
            margin-bottom: 0;
        }

        .card-body {
            padding: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-info {
            background-color: #96C9F4; /* Light blue button color */
            border-color: #96C9F4;
            color: #fff;
        }

        .btn-info:hover {
            background-color: #6fa8dc; /* Darker blue on hover */
            border-color: #6fa8dc;
        }

        .page-heading {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div id="app">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
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
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
