<?php
foreach ($text as $t):
    ?>

    <div>
            <p>Название: <?= $t['name'] ?></p>
            <p>Цена: <?= $t['price'] ?></p>
    </div>
<?php endforeach; ?>
<form action="" method="get">
    <input type="text" value="Имя" name="name">
    <input type="text" value="Фамилия" name="surname">
    <input type="text" value="Адрес" name="address">
    <input type="hidden" name="c" value="basket">
    <input type="hidden" name="act" value="buy">
    <input type="submit">
</form>
