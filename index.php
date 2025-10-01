<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';

?>

<h1>The UEFA Women's Champions League</h1>
<main>
    <article class="card-container">
        <?php foreach ($teams as $key => $team): ?>
            <article class="team-card">
                <h2><?= $key ?> </h2>
                <img src="<?= $team['logo'] ?>" alt="The teams logo" width="250">
                <p>League: <?= $team['league'] ?></p>
                <p>City: <?= $team['city'] ?></p>
                <p>UEFA coefficient ranking: <?= $team['uefa-coefficient-ranking'] ?></p>
                <p>Opponents</p>
                <?php foreach ($team['opponents'] as $opponent): ?>
                    <ul>
                        <li><?= $opponent ?></li>
                    </ul>
                <?php endforeach ?>
                <a href="<?= $team['url'] ?>">Link to teams website</a>
            </article>
        <?php endforeach ?>
    </article>


</main>
</body>

</html>