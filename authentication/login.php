<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link rel="stylesheet" type="text/css" href="../logincss/style.css">

    </head>
    <body>
        <div class="login">
            <h1>Login</h1>
            <form action="loginlogic.php" method="POST">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Username" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <label for="role">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="role" placeholder="Role" id="role" required="">
                <input type="submit" value="Login" name="save">

            </form>
        </div>
    </body>
</html>