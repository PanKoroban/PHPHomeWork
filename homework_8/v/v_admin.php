<a href="index.php?c=admin&act=new">Новый товар</a>
<div class="conteiner">
    <?php
    foreach ($text as $t):
        ?>
        <div class="card">
                <img src="<?= $t['img_url'] ?>" alt="">
                <p>Название: <?= $t['name'] ?></p>
                <p>Описание: <?= $t['disc'] ?></p>
                <p>Цена: <?= $t['price'] ?></p>
            <a href="index.php?c=admin&act=change&id=<?= $t['id'] ?>">Изменить</a>
            <a href="index.php?c=admin&act=del&id=<?= $t['id'] ?>">Удалить</a>
        </div>
    <?php endforeach; ?>
</div>
