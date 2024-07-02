<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAW</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <style>
        /* Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap');
        
        /* Bootstrap CSS */
        @import url('assets/css/bootstrap.css');
        
        /* Bootstrap Icons */
        @import url('assets/vendors/bootstrap-icons/bootstrap-icons.css');
        
        /* Custom CSS */
        body {
            background: #f7f7f7;
        }

        #auth-left {
            padding: 3rem;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        #auth-left .auth-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 2rem;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-primary {
            background: #0069d9;
            border-color: #0069d9;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background: #0056b3;
            border-color: #0056b3;
        }

        #auth-right {
            background: url('assets/images/login-background.jpg') no-repeat center center;
            background-size: cover;
        }

        .form-control-icon {
            color: #0069d9;
        }
    </style>
</head>

<body>
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-6 col-md-8 col-10 mx-auto">
                <div id="auth-left">
                    <h1 class="auth-title">Log in.</h1>
                    <form action="login-act.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required>
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-4">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
                <div id="auth-right"></div>
            </div>
        </div>
    </div>
</body>

</html>
