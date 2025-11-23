<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="containerLeft">
            <h1>Faceset</h1>
            <p>Faceset helps you connect and share with people
                in your life
            </p>
        </div>

        <div class="containerRight">
            <form action="index.php" method="post">
                <input type="email" placeholder="Email address or Phonenumber">
                <input type="password" placeholder="Password">

                <button id="login">Log in</button>
                <a href="#">Forgotten Password</a>

                <hr>

                <button id="signup">Create new account</button>
            </form>
        </div>
    </div>
</body>
</html>