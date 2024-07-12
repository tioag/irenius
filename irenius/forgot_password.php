<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    // Verifikasi email dan kirim token reset password (untuk kesederhanaan, token dihardcode di sini)
    $_SESSION['resetToken'] = "123456"; // Gantilah dengan token yang dihasilkan secara dinamis
    header("Location: reset_password.php?token=" . $_SESSION['resetToken']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .forgot-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .forgot-box {
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #ff7eb3;
            text-align: center;
        }

        .textbox {
            margin-bottom: 20px;
        }

        .textbox input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .textbox input:focus {
            border-color: #ff7eb3;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #ff758c, #ff7eb3);
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn:hover {
            background: linear-gradient(to right, #ff7eb3, #ff758c);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="forgot-container">
            <div class="forgot-box">
                <h2>Lupa Password</h2>
                <form action="forgot_password.php" method="POST">
                    <div class="textbox">
                        <input type="email" placeholder="Email" name="email" required>
                    </div>
                    <button type="submit" class="btn">Kirim Reset Link</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
