
<section class="typeBook">
    <div class="typeBookTitle">
        <h2>Les catogorie</h2>
    </div>
<div class="btnType">
    <?php foreach ($type as $t) {?>
        <a href="<?php $t->id?>"><button><?= $t->typesName?></button></a>
        <?php }?>
</div>

</section>


    <section class="bookViews">
        <?php foreach( $bookList as $book){?>
        <article class="bookViewsList">
        <div class="titleBook">
            <h3><?= $book->bookName?></h3>
        </div>
        <img class="imgBook" src="<?= $book->cover ?>" alt="<?= $book->bookName?>">
        <p>Numero de Tome : <?= $book->tomeNumber ?></p>
        <p>Date de sortie :<?= $book->releaseDate ?></p>
        <a href="/info-<?= $book->id ?>"><button>Plus d'info ...</button></a>
        </article>
        <?php } ?>
    </section>

