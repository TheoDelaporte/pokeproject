<?php



?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="<?= h($pokemon->default_front_sprite_url) ?>" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= h($pokemon->default_back_sprite_url) ?>" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= h($pokemon->shiny_front_sprite_url) ?>" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?= h($pokemon->shiny_back_sprite_url) ?>" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<figcaption class="card__caption">
    <h1 class="card__name"><?= $pokemon->name ?></h1>

    <h3 class="card__type <?= $pokemon->first_type ?>"">
            <?= $pokemon->first_type ?>
        </h3>

        <?php if ($pokemon->has_second_type) : ?>
        <h3 class=" card__second_type <?= $pokemon->second_type ?>">
        <?= $pokemon->second_type ?>
    </h3>
<?php endif;

        use Cake\Datasource\ConnectionManager;

        $connection = ConnectionManager::get('default');
        $results = $connection->execute('SELECT value FROM pokemon_stats where pokemon_id=' . $pokemon->id . ' ')->fetchall('assoc');
?>
<table class="card__stats">
    <tbody>
        <tr>
            <th>HP</th>
            <td><?= $results[0]['value'] ?></td>
        </tr>
        <tr>
            <th>Defense</th>
            <td><?= $results[2]['value'] ?></td>
        </tr>
        <tr>
            <th>Attack</th>
            <td><?= $results[1]['value'] ?></td>
        </tr>
        <tr>
            <th>Special Attack</th>
            <td><?= $results[3]['value'] ?></td>
        </tr>
        <tr>
            <th>Special Defense</th>
            <td><?= $results[4]['value'] ?></td>
        </tr>
        <tr>
            <th>Speed</th>
            <td><?= $results[5]['value'] ?></td>
        </tr>
    </tbody>
</table>

</figcaption>
