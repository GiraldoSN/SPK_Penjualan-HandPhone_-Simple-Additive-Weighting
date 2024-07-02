<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAW</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f2f5;
        }

        #auth {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #auth-left {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .auth-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-control-xl {
            height: 60px;
            font-size: 18px;
            border-radius: 8px;
            padding-left: 60px;
            border: 1px solid #ccc;
        }

        .form-control-icon {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            color: #ccc;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-size: 20px;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 60px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .auth-right {
            background: url('assets/images/auth-right.jpg') no-repeat center center;
            background-size: cover;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <h1 class="auth-title">Log in</h1>
                    <form action="login-act.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-4">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div class="auth-right"></div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>
