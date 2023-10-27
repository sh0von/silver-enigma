<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $validUsername = base64_decode("dmVyeXdlYWtuYW1l");
    $encryptedPassword = str_rot13("FhcreQhc3eCnff");

    if ($username === $validUsername && $password === $encryptedPassword) {
        // Successful login, set the 'admin' session variable to true
        $_SESSION['admin'] = true;

        header("Location: success.php");
        exit();
    } else {
        echo '<div style="max-width: 400px;" class="container mt-5"><div class="alert alert-danger">Invalid username or password. Please try again.</div></div>';
    }
}

if (isset($_GET['src'])) {
    highlight_file(__FILE__);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container mx-auto mt-5" style="max-width: 400px;">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Login</h2>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</div> 
</body>
</html>
