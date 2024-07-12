<?php
session_start();

$validEmail = "tio@example.com";
$validPassword = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $validEmail && $password == $validPassword) {
        $_SESSION['email'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error = "Email atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @keyframes slideIn {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('G1.jpg') no-repeat center center fixed;
            background-size: cover;
            animation: fadeIn 2s ease-in-out;
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            animation: fadeIn 2s ease-in-out;
        }

        .login-container {
            display: flex;
            width: 800px;
            height: 400px;
            background: #fff;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            overflow: hidden;
        }

        .login-box {
            width: 50%;
            padding: 40px;
            position: relative;
            background: #8B4513;
            text-align: center;
            animation: slideIn 1s ease-out;
            color: #fff;
        }

        .login-box h2 {
            margin: 0 0 20px;
            padding: 0;
            color: #fff;
            text-transform: uppercase;
        }

        .login-box p {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
        }

        .textbox {
            position: relative;
            margin-bottom: 30px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            background: #f5f5f5;
            border: none;
            outline: none;
            color: #333;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #333;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #555;
        }

        .forgot {
            display: block;
            margin-top: 10px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .forgot:hover {
            color: #ddd;
        }

        .register {
            display: block;
            margin-top: 20px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
        }

        .register:hover {
            color: #ddd;
        }

        .image-box {
            width: 50%;
            background: url('G2.jpg') no-repeat center center;
            background-size: cover;
        }
        .Btn {
  width: 140px;
  height: 40px;
  border: none;
  border-radius: 10px;
  background: linear-gradient(to right,#77530a,#ffd277,#77530a,#77530a,#ffd277,#77530a);
  background-size: 250%;
  background-position: left;
  color: #ffd277;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition-duration: 1s;
  overflow: hidden;
}

.Btn::before {
  position: absolute;
  content: "Login";
  color: #ffd277;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 97%;
  height: 90%;
  border-radius: 8px;
  transition-duration: 1s;
  background-color: rgba(0, 0, 0, 0.842);
  background-size: 200%;
}

.Btn:hover {
  background-position: right;
  transition-duration: 1s;
}

.Btn:hover::before {
  background-position: right;
  transition-duration: 1s;
}

.Btn:active {
  transform: scale(0.95);
}
    </style>
</head>
<body>
    <div class="container fade-in">
        <div class="login-container fade-in">
            <div class="login-box fade-in">
                <h2>LOGIN</h2>
                <p>Jasa Jahit</p>
                <form action="login.php" method="POST">
                    <div class="textbox fade-in">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <div class="textbox fade-in">
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <button class="Btn">
                    </button>
                    <a href="forgot_password.php" class="forgot fade-in">Lupa password?</a>
                    <a href="register.php" class="register fade-in">Buat Akun Baru</a>
                </form>
                <?php
                if (isset($error)) {
                    echo "<p style='color:red;' class='fade-in'>$error</p>";
                }
                ?>
            </div>
            <div class="image-box fade-in"></div>
        </div>
    </div>
</body>
</html>
