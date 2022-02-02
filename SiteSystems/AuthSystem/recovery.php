<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Восстановление пароля</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col d-flex flex-column">
                <h2 class="align-self-center">Восстановление пароля</h2>
                <div class="align-self-center">
                    <form class="pt-2 d-flex flex-column">
                        <div class='input-group'>
                            <input type="text" id='mail-input' class="form-control" placeholder="Почта" style='width: 300px !important'>
                            <span class='input-group-btn mx-3'>
                                <input type="button" class="btn btn-primary" value='Отправить код подтверждения' onclick="confirmationEmail()">
                            </span>
                        </div>
                        <br>
                        <div class='input-group'>
                            <input type="text" id='confirmation-code-input' class="form-control" placeholder="Код подтверждения">
                            <span class='input-group-btn mx-3'>
                                <input type="button" class="btn btn-primary" value='Подтвердить почту' onclick="checkConfirmationCode()">
                            </span>
                        </div>
                        <br>
                        <input type="password" id='new-password-input1' class="form-control" placeholder="Новый пароль">
                        <br>
                        <input type="password" id='new-password-input2' class="form-control" placeholder="Повтор нового пароля">
                        <br>
                        <input type="button" class="btn btn-primary align-self-center" value="Сменить" onclick="recoveryPassword()">
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    <script src="js/auth_system.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>