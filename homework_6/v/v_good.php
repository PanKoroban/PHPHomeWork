<?php
?>
<div>
        <p>Название: <?= $text['name'] ?></p>
        <p>Описание: <?= $text['disc'] ?></p>
        <p>Цена: <?= $text['price'] ?></p>
        <img src="<?= $text['img_url'] ?>" alt="">
</div>

<a href="index.php?c=basket&act=add&id=<?= $_GET['id'] ?>">Добавить</a>

</form>
