<?php
session_start();

if (isset($_GET['token']) && $_GET['token'] == $_SESSION['resetToken']) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newPassword = $_POST['new_password'];
        // Update password di database (di sini dihardcode untuk contoh)
        $_SESSION['registered_password'] = $newPassword;
        $message = "Password berhasil direset!";
    }
} else {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
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

        .reset-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .reset-box {
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

        .message {
            color: green;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="reset-container">
            <div class="reset-box">
                <h2>Reset Password</h2>
                <form action="reset_password.php?token=<?php echo $_SESSION['resetToken']; ?>" method="POST">
                    <div class="textbox">
                        <input type="password" placeholder="Password Baru" name="new_password" required>
                    </div>
                    <button type="submit" class="btn">Reset Password</button>
                </form>
                <?php
                if (isset($message)) {
                    echo "<p class='message'>$message</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
