<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Penggunaan Font YupiTONRegular</title>
    <style>
        @font-face {
            font-family: 'YupiTONRegular';
            src: url('font/YupiTONRegular.woff2') format('woff2'),
                 url('font/YupiTONRegular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'YupiTONRegular', Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }

        .page-heading {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #96C9F4;
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 10px;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .table {
            margin-top: 20px;
        }

        .btn-outline-success {
            color: #28a745;
            border-color: #28a745;
        }

        .btn-outline-success:hover {
            color: white;
            background-color: #28a745;
            border-color: #28a745;
        }
    </style>
</head>
<body>
    <div id="app">
        <div id="main">
            <div class="page-heading">
                <h3>Contoh Penggunaan Font YupiTONRegular</h3>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tabel Data</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <p class="card-text">Ini adalah contoh penggunaan font YupiTONRegular pada halaman HTML.</p>
                    </div>
                    <button type="button" class="btn btn-outline-success btn-sm m-2">
                        Tambah Data
                    </button>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <caption>Tabel Contoh</caption>
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class='text-center'>1</td>
                                    <td>Contoh Nama</td>
                                    <td class='text-center'>
                                        <div class='btn-group'>
                                            <button class='btn btn-primary btn-sm dropdown-toggle' type='button'>
                                                Aksi
                                            </button>
                                            <div class='dropdown-menu'>
                                                <a class='dropdown-item' href='#'>Edit</a>
                                                <a class='dropdown-item' href='#'>Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
