<link href="css/signup.css" rel="stylesheet">
<div class="container">
    <form class="form-signup" action="" method="POST">
        <h2 class="form-signup-heading">Регистрация</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Введите никнейм" name="nick"/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Введите пароль" name="password"/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Введите пароль повторно" name="password_confirm"/>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Введите адрес электронной почты" name="email"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Введите имя" name="first_name"/>
        </div>
        <div class="form-group">
            <label class="checkbox">
                <input type="checkbox" value="remember-me" name="remember_me"> Запомнить меня
            </label>
        </div>
        <button type="submit" class="btn btn-lg btn-primary btn-block">Принять</button>
        <?php if(isset($data))
        {
            foreach ($data as $key => $value)
            {
                echo '<h1>'.$key.':'.$value.'</h1>';
            }
        }?>
</form>
</div>
