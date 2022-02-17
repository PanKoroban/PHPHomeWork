<?php
?>
<div>
    <p>Название: <?= $text['name'] ?></p>
    <p>Описание: <?= $text['disc'] ?></p>
    <p>Цена: <?= $text['price'] ?></p>
</div>
<form action="" method="post">
    <label>Название </label><input type="text" name="name">
    <label>Описание </label><input type="text" name="disc">
    <label>Цена </label><input type="text" name="price">
    <input type="submit">
</form>