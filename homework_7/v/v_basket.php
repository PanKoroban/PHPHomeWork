<div class="conteiner">
<?php if(!$text):?>
    <p>Корзина пуста</p>
    </div>
    <?php endif; ?>
    
    <?php
if ($text):
foreach ($text as $t):
    ?>

    <div class="card">
            <p>Название: <?= $t[0]['name'] ?></p>
            <a href="index.php?c=basket&act=sub&id=<?= $t[0]['goods_id'] ?>"> - 1 </a>
            <p>Кол-во: <?= $t[0]['count'] ?></p>
            <a href="index.php?c=basket&act=add&id=<?= $t[0]['goods_id'] ?>"> + 1 </a>
            <p>Цена: <?= $t[0]['price'] ?></p>
        <a href="index.php?c=basket&act=del&id=<?= $t[0]['goods_id'] ?>">Удалить</a>
    </div>
<?php endforeach;
?>
</div>
<form action="" method="get">
    <input type="text" value="Имя" name="name">
    <input type="text" value="Фамилия" name="surname">
    <input type="text" value="Адрес" name="address">
    <input type="hidden" name="c" value="basket">
    <input type="hidden" name="act" value="buy">
    <input type="submit" value="Купить">
</form>
<?php endif;
?>
