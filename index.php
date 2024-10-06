<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
        <div class="wrapper">
            <h4>Sign up</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="include/signup-inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="Email">
                <br>
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>Login</h4>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="include/login-inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </section>


    
</body>
</html>