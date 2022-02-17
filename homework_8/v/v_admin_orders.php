<div class="conteiner">
    <h4>Не обработанные заказы</h4>
    <?php
    foreach ($res as $t):
        ?>
        <div class="card">
                <p>id: <?= $t['id'] ?></p>
                <p>Товар: <?= $t['g_name'] ?></p>
                <p>Кол-во: <?= $t['count'] ?></p>
                <p>Адрес доставки: <?= $t['address'] ?></p>
                <p>Имя: <?= $t['name'] ?></p>
                <p>Фамилия: <?= $t['surname'] ?></p>
            <a href="index.php?c=admin&act=deliver&id=<?= $t['id'] ?>">Отправить</a>
        </div>
    <?php endforeach; ?>
    <h4>Отправленные:</h4>
    <?php
    foreach ($deliv as $t):
        ?>
        <div class="card">
            <p>id: <?= $t['id'] ?></p>
            <p>Товар: <?= $t['g_name'] ?></p>
            <p>Кол-во: <?= $t['count'] ?></p>
            <p>Адрес доставки: <?= $t['address'] ?></p>
            <p>Имя: <?= $t['name'] ?></p>
            <p>Фамилия: <?= $t['surname'] ?></p>
            <a href="index.php?c=admin&act=finish&id=<?= $t['id'] ?>">Завершить</a>
        </div>
    <?php endforeach; ?>
</div>
