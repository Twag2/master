<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up - Twag2</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="signup.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <form class="form-signup" action="register.php" method="POST">
        <h2 class="form-signup-heading">Регистрация</h2>
        <div class="form-group"><input type="text" class="form-control" placeholder="Введите никнейм"/></div>
        <div class="form-group"><input type="password" class="form-control" placeholder="Введите пароль"/></div>
        <div class="form-group"><input type="password" class="form-control" placeholder="Введите пароль повторно"/></div>
        <div class="form-group"><input type="email" class="form-control" placeholder="Введите адрес электронной почты"/></div>
        <div class="form-group"><input type="text" class="form-control" placeholder="Введите имя"/></div>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Принять</button>
</form>
</div>
</body>
</html>