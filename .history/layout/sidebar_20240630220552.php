<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #sidebar {
            background-color: #2c3e50;
            color: #ecf0f1;
            transition: all 0.3s ease;
        }

        .sidebar-link {
            color: #ecf0f1;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .sidebar-link:hover {
            color: #3498db;
        }

        .menu {
            list-style: none;
            padding: 0;
        }

        .submenu {
            list-style: none;
            padding: 0;
            margin: 10px 0 0 20px;
        }

        .sidebar-item {
            margin: 10px 0;
        }

        .sidebar-header {
            padding: 15px;
        }

        .sidebar-title {
            padding: 10px 0;
            font-size: 16px;
            color: #bdc3c7;
        }

        .toggler a {
            color: #ecf0f1;
        }

        .sidebar-toggler.btn {
            transition: transform 0.3s ease;
        }

        .sidebar-toggler.btn:hover {
            transform: rotate(90deg);
        }
    </style>
</head>
<body>
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="./">SPK - SAW</a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block">
                            <i class="bi bi-x bi-middle"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item">
                        <a href="./" class="sidebar-link">
                            <i class="bi bi-grid-fill" style="margin-right: 10px;"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item has-sub">
                        <a href="#" class="sidebar-link">
                            <i class="bi bi-file-earmark-spreadsheet-fill" style="margin-right: 10px;"></i>
                            <span>Data</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item">
                                <a href="alternatif.php">Alternatif</a>
                            </li>
                            <li class="submenu-item">
                                <a href="bobot.php">Bobot & Kriteria</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a href="matrik.php" class="sidebar-link">
                            <i class="bi bi-pentagon-fill" style="margin-right: 10px;"></i>
                            <span>Matrik</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="preferensi.php" class="sidebar-link">
                            <i class="bi bi-bar-chart-fill" style="margin-right: 10px;"></i>
                            <span>Nilai Preferensi</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="logout.php" class="sidebar-link">
                            <i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x" style="background: none; border: none; color: #ecf0f1;">
                <i data-feather="x"></i>
            </button>
        </div>
    </div>
</body>
</html>
