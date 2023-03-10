<section class="bookOne">
    <?php foreach ($cherckBookList as $cbl) { ?>
        <h2><?= $cbl->bookName ?></h2>
        <div class="bookTome">
            <div class="imageOne">
                <img src="<?= $cbl->cover ?>" alt="<?php $cbl->bookName ?>">
            </div>
            <div class="decoBookOne">
                <p>Numero de Tome : <?= $cbl->tomeNumber ?></p>
                <p><?= $cbl->releaseDate ?></p>
                <p>Prix :<?= $cbl->price ?></p>
                <p><?= $cbl->conditionsName ?></p>
                <p><?= $cbl->editorsName ?></p>
                <p><?= $cbl->authorsName ?></p>
                <p><?= $cbl->catagorieName ?></p>
            </div>
            <div class="textOne">
                <p class="boxDescription"><?= $cbl->description ?></p>
            </div>
            <button>
                <span class="material-symbols-outlined">shopping_cart_checkout</span>
            </button>
            <button>
            <span class="material-symbols-outlined">favorite</span>
            </button>
        </div>

    <?php } ?>
    <div>
    </div>

</section>