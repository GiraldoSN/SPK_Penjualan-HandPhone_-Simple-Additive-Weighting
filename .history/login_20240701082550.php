<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAW</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
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
            display: grid;
            grid-template-columns: 1fr 1fr;
            width: 80%;
            max-width: 900px;
        }

        #auth-left {
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #auth-left h1 {
            margin-bottom: 30px;
            font-size: 2.5rem;
            font-weight: 700;
        }

        #auth-left .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            padding-left: 40px;
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
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://source.unsplash.com/900x900/?technology') no-repeat center center;
            background-size: cover;
        }

        .gif-container {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gif-container img {
            width: 100%;
            height: auto;
            max-width: 300px;
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #4e54c8;
            border: none;
            padding: 15px 20px;
            font-size: 1.2rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #8f94fb;
        }

        .position-relative {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            #auth {
                grid-template-columns: 1fr;
                width: 90%;
            }

            #auth-right {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div id="auth">
        <div id="auth-left">
            <h1 class="auth-title">Log in</h1>
            <form action="login-act.php" method="post">
                <div class="form-group position-relative">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                    <div class="form-control-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                <div class="form-group position-relative">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                    <div class="form-control-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
            </form>
        </div>
        <div id="auth-right">
            <div class="gif-container">
                <img src="https://media.giphy.com/media/3oEduSbSGpGaRX2Vri/giphy.gif" alt="Animal Animation">
            </div>
        </div>
    </div>
</body>

</html>
