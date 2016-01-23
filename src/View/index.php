<?php
use Entity\Entry;

/** @var Entry[] $entries */
?>

<html>
<body>

<h3>Гостевая книга</h3>


<form action="" method="post">
    <p>
        Ваше имя: <input type="text"/>
    </p>
    <p>
        <textarea name="entry_text" id="" cols="30" rows="10"></textarea>
    </p>
    <p>
        <input type="submit" value="Оставить запись"/>
    </p>
</form>

<p>Количество оставленных записей: <?= count($entries) ?></p>
<hr>
<?php foreach ($entries as $entry) { ?>
    <p>
        <strong>Автор</strong>: <?= $entry->getAuthor() ?>
    </p>
    <p>
        <?= $entry->getText() ?>
    </p>
    <hr>
<?php } ?>

</body>
</html>
