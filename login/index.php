<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styleLogin.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward()
        };
        setTimeout("preventBack()"), 0;
        window.onunload = function() {
            null
        }
    </script>
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN ADMIN</h2>
                <div class="underline-title"></div>
            </div>

            <form method="post" action="cek_login.php">
                <label for="user-email" style="padding-top:13px">&nbsp;Email</label><br>
                <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                <div class="form-border"></div><br>
                <label for="user-password" style="padding-top:22px">&nbsp;Password</label><br>
                <input id="user-password" class="form-content" type="password" name="password" required />
                <div class="form-border"></div>

                <div class="container-btn">
                    <div class="center">
                        <button type="submit" id="submit-btn" name="submit" value="LOGIN">LOGIN</button>
                    </div>
                </div>
                <div style="margin-top:25px; text-align:center;">
                    Login sebagai pembeli <a href="loginPembeli.php"> Klik disini</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>