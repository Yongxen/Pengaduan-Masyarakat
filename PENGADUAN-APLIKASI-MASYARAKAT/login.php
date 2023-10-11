<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
    
        // Hash the password (you should use a more secure method for hashing).
        $hashed_password = md5($password);
    
        // Query to check if the user exists in the database.
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hashed_password'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            // User exists, log them in.
            session_start();
            $_SESSION["username"] = $username;
            header("Location: dashboard.php"); // Redirect to the dashboard or any other page.
        } else {
            // Invalid username or password.
            echo "Invalid username or password.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <title>Login Tiket</title>
</head>
<body>
    <h1>Login</h1>
    
    <form action="cek_login.php" method="POST">
        <h3>Email :</h3>
        <input type="email" name="email" placeholder="Masukan Email Anda">

        <h3>Nama :</h3>
        <input type="text" name="nama" placeholder="Masukan Nama Anda">

        <h3>Password</h3>
        <input type="password" name="password" placeholder="Masukan Password">
        <br><br>
        <input type="submit" value="Login">
    </form>

    <a href="index.php">Belum punya akun?</a>
 
</body>
</html>