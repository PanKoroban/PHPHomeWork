<?= $text ?>
<?php if ($_SESSION['is_login'] != 1){ ?>
<form action="" method="POST">
    <label>Login </label>
    <input type="login" name="login">
    <br>
    <label>Password </label>
    <input type="password" name="pass">
    <br>
    <input type="submit" value="Submit">
</form>
<?php } ?>