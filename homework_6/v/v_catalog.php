<?php
foreach ($text as $t):
    ?>
<div>
    <a href="index.php?c=good&id=<?= $t['id'] ?>">
        <p>Название: <?= $t['name'] ?></p>
        <p>Описание: <?= $t['Disc'] ?></p>
        <p>Цена: <?= $t['price'] ?></p>
    </a>
</div>
<?php endforeach; ?>

