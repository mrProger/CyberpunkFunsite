<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Вход</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col d-flex flex-column">
                <h2 class="align-self-center">Вход</h2>
                <div class="align-self-center">
                    <form class="pt-2 d-flex flex-column">
                        <input type="text" id='login-input' class="form-control align-self-center" placeholder="Логин">
                        <br>
                        <input type="password" id='password-input' class="form-control" placeholder="Пароль">
                        <br>
                        <span>Забыли пароль? <a href="recovery.php">Восстановить</a></span>
                        <br>
                        <input type="button" class="btn btn-primary align-self-center" value="Войти" onclick="auth()">
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    <script src="js/auth_system.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>