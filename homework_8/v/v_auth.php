<?php
if ($_GET['act'] == 'reg'):
    ?>
<form action="" method="post">
    <label>Введите имя:</label><input type="text" name="name" required><br>
    <label>Введите фамилию:</label><input type="text" name="surname" required><br>
    <label>Введите адрес:</label><input type="text" name="address" required><br>
    <label>Введите логин:</label><input type="text" name="login" required><br>
    <label>Введите пароль:</label><input type="text" name="pass" required><br>
    <input type="submit" value="Зарегистрироваться">
</form>
<?php
endif;
echo ($res);
if ($_GET['act'] == 'login'):
?>
<form action="" method="post">
    <label>Введите логин:</label><input type="text" name="login" required><br>
    <label>Введите пароль:</label><input type="text" name="pass" required><br>
    <input type="submit" value="Войти">
</form>
<?php
endif;
?>



