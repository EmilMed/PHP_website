<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="static/styles.css">
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register Now!</h3>
            <input type="text" name="name" required placeholder="Enter Name">
            <input type="email" name="email" required placeholder="Enter Email">
            <input type="password" name="password" required placeholder="Enter Password">
            <input type="password" name="password" required placeholder="Confirm your Password">
            <select name="user_type">
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already have an account? <a href="login_page.php">Login!</a></p>
        </form>
    </div>
</body>
</html>