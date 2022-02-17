<div class="conteiner">
<?php
foreach ($text as $t):
    ?>
<div class="card">
    <a href="index.php?c=good&id=<?= $t['id'] ?>">
        <img src="<?= $t['img_url'] ?>" alt="">
        <p>Название: <?= $t['name'] ?></p>
        <p>Описание: <?= $t['disc'] ?></p>
        <p>Цена: <?= $t['price'] ?></p>
    </a>
</div>
<?php endforeach; ?>
</div>
