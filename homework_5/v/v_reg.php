<?= $text ?>
<?php if ($_SESSION['is_login'] != 1){ ?>
<form action="" method="POST">
    <label>Create login </label>
    <input type="login" name="login">
    <br>
    <label>Create password </label>
    <input type="password" name="pass">
    <br>
    <label>Your name </label>
    <input type="text" name="name">
    <br>
    <input type="submit" value="Registration">
</form>
<?php } ?>