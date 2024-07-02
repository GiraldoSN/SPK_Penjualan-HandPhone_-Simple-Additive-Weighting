<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAW</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        #auth {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            display: flex;
            width: 80%;
            max-width: 900px;
        }

        #auth-left {
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #auth-left h1 {
            margin-bottom: 30px;
        }

        #auth-left .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        #auth-left .form-control:focus {
            box-shadow: none;
            border-color: #fff;
        }

        #auth-left .form-control-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
        }

        #auth-right {
            flex: 1;
            background: url('https://source.unsplash.com/900x900/?technology') no-repeat center center;
            background-size: cover;
        }

        .btn-primary {
            background-color: #4e54c8;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #8f94fb;
        }
    </style>
</head>

<body>
    <div id="auth">
        <div id="auth-left">
            <h1 class="auth-title">Log in</h1>
            <form action="login-act.php" method="post">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                    <div class="form-control-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                    <div class="form-control-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
        </div>
        <div id="auth-right" class="d-none d-lg-block"></div>
    </div>
</body>

</html>
