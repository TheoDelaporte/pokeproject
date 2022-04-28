<figure class="card card--<?= $pokemon->first_type ?>">
    <div class="card__image-container poke-sprite-<?= $pokemon->pokedex_number ?>" id="main-poke-sprites">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="<?= h($pokemon->default_front_sprite_url) ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/<?= $pokemon->pokedex_number ?>.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/<?= $pokemon->pokedex_number ?>.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/back/shiny/<?= $pokemon->pokedex_number ?>.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

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
    <?php endif ?>

    <table class="card__stats">
        <tbody>
            <tr>
                <th>HP</th>
                <td><?= $pokemon->height ?></td>
            </tr>
            <tr>
                <th>Defense</th>
                <td><?= $pokemon->weight ?></td>
            </tr>
            <tr>
                <th>Attack</th>
                <td><?= $pokemon->weight ?></td>
            </tr>
            <tr>
                <th>Special Attack</th>
                <td><?= $pokemon->weight ?></td>
            </tr>
            <tr>
                <th>Special Defense</th>
                <td><?= $pokemon->weight ?></td>
            </tr>
            <tr>
                <th>Speed</th>
                <td><?= $pokemon->weight ?></td>
            </tr>
        </tbody>
    </table>
    </figcaption>
</figure>
