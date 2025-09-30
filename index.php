<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';

?>

<main>

    <?php foreach ($teams as $key => $team): ?>
        <h3><?= $key ?> </h3>
        <img src="<?= $team['logo'] ?>" alt="The teams logo" width="250">
        <p><?= $team['league'] ?></p>
        <p><?= $team['city'] ?></p>
        <p><?= $team['uefa-coefficient-ranking'] ?></p>
        <p><?= $team['url'] ?></p>
        <p>Opponents</p>
        <?php foreach ($team['opponents'] as $opponent): ?>
            <ul>
                <li><?= $opponent ?></li>
            </ul>
        <?php endforeach ?>


    <?php endforeach ?>


</main>
</body>

</html>