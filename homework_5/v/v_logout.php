<?php if($_SESSION['name']): ?>
<form action="" method="post">
    <input type="submit" value="logout">
    <input type="hidden" value="out">
</form>
<?php endif ?>
<?= $text ?>

