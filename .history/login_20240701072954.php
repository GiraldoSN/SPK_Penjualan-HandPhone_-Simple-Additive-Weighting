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
            align-items: center;
        }

        #auth-left {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .auth-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 40px;
            color: #333;
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
        }

        .form-control-icon {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            color: #ccc;
        }

        .btn-primary {
            background-color: #0069d9;
            border-color: #0062cc;
            font-size: 20px;
            font-weight: 600;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0050a0;
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-10">
                    <div id="auth-left">
                        <h1 class="auth-title">Log in</h1>
                        <form action="login-act.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                                <div class="form-control-icon">
                                    <i class="bi bi-person"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                                <div class="form-control-icon">
                                    <i class="bi bi-shield-lock"></i>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
