<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<div class="login-container">
        <h2>Log In</h2>
        <form method="POST" action="./backend/login.php">
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="login-btn">Log in</button>
        </form>
    </div>
</body>
</html>


