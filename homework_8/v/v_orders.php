<h4>В обработке:</h4>
<?php
print_r($res);
foreach ($status_0 as $r): ?>
<div class="card">
    <p>Товар: </p>
    <?= $r['name'] ?>
    <p>Кол-во: </p>
    <?= $r['count'] ?>
</div>
<?php endforeach ?>
<h4>Отправлены:</h4>
<?php
foreach ($status_1 as $r): ?>
    <div class="card">
        <p>Товар: </p>
        <?= $r['name'] ?>
        <p>Кол-во: </p>
        <?= $r['count'] ?>
    </div>
<?php endforeach ?>
<h4>Получены:</h4>
<?php
foreach ($status_2 as $r): ?>
    <div class="card">
        <p>Товар: </p>
        <?= $r['name'] ?>
        <p>Кол-во: </p>
        <?= $r['count'] ?>
    </div>
<?php endforeach ?>