<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="js/login.js">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login BEM</title>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
    <style type="text/css">
    h3 {
        font-family: 'Acme', sans-serif;
    }
    </style>
</head>

<body>
    <section class="form-section">
        <div class="form-wrapper">
            <form action="">
                <div class="photo-info">
                    <img src="assets/images/logoBem.png" alt="">
                    <h3>LOGIN</h3>
                </div>
                <div class="input-block email">
                    <input id="login-email" type="email" placeholder="Email" />
                </div>
                <div class="input-block password">
                    <input type="password" id="login-email" placeholder="Password" />
                </div>
                <p>Don’t have an account? <a href="/signup" class="span">Sign Up</a> here.</p>
                <button type="submit" class="btn-login"><a href="/admin"></a>Sign In</button>
            </form>
        </div>
    </section>

    <ul class="squares"></ul>

    <script src="js/login.js"></script>
</body>

</html>