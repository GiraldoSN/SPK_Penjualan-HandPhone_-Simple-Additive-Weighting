<?php
require "include/conn.php";

// Fetching data based on ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';
if (!empty($id)) {
    $sql = "SELECT * FROM saw_alternatives WHERE id_alternative = '$id'";
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
    <title>Alternatif Edit</title>
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
            color: #ffffff; /* White text */
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
            width: 100%; /* Full width button */
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
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-header bg-primary">
                            <h4 class="card-title">Edit Data Alternatif</h4>
                        </div>
                        <div class="card-body">
                            <form action="alternatif-edit-act.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="hidden" name="id_alternative" value="<?= $row['id_alternative']; ?>">
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $row['name']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                                </div>
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
