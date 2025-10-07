<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/header.php';
?>

<main>
    <h1>The UEFA Women's Champions League</h1>
    <article class="info">
        <p>Here you can read and learn more about the teams in this year's UEFA Women's Champions League!</p>
    </article>
    <article class="card-container">
        <?php foreach ($teams as $key => $team): ?>
            <article class="team-card">
                <h2><?= $key ?> </h2>
                <img src="<?= $team['logo'] ?>" alt="The teams logo">
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

<?php
require_once __DIR__ . '/footer.php';
