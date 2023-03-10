<?php
session_start();
include_once('views/includes/nav.php');
?>
<!--container contien tout la presentation 
    short = text de presantation
    houes = les horaire
    new = les nouveaute ajoute-->
<div class="container">
    <div class="ranking">
        <div class="short deco">
            <div>
                <h2 class="accusedTitle">Pourquoi Nous</h2>
            </div>
            <p class="textShort">
                Tout le monde connaît de près ou de loin les mangas, cette étonnante bande dessinée en provenance du pays du soleil levant.
                Naruto, One Piece, Bleach, ou encore Dragon ball, trouvent place dans nos bibliothèques depuis quelques années.
                Ils sont aujourd'hui systématiquement présent dans toutes les librairies de France, de part leur tome en nombre conséquent,
                avec leurs accessoires et figurines que les fans s'arrachent et collectionnent.
            </p>
        </div>
        <div class="houes deco">
            <div>
                <h2 class="accusedTitle">Les Hauraires</h2>
            </div>
            <p>lundi : Ferme</p>
            <p>mardi : 8h00 - 19h00</p>
            <p>mercredi : 8h00 - 19h00</p>
            <p>jeudi : 8h00 - 19h00</p>
            <p>vendredi : 8h00 - 19h00</p>
            <p>samedi : 8h00 - 19h00</p>
            <p>dimenche : Ferme</p>
        </div>
    </div>
    <div class="deco new">
        <h2 class="accusedTitle">Les Nouveautés</h2>
        <div class="book">
            <div class="bookImg">
                <img class="imagBook" src="assets/img/onepiece.jpg" alt="les nouveau ajout">
            </div>
            <div class=bookText>
                <h3>One Piece - édition originale t.1 ; Romance Dawn, à l'aube d'une grande aventure</h3>
                <p>
                    Nous sommes à l'ère des pirates.
                    Luffy, un garçon espiègle, rêve de devenir le roi des pirates en trouvant le "One Piece",
                    un fabuleux trésor. Par mégarde, Luffy a avalé un jour un fruit démoniaque qui l'a transformé en homme caoutchouc.
                    Depuis, il est capable de contorsionner son corps élastique dans tous les sens, mais il a perdu la faculté de nager.
                    Avec l'aide de ses précieux amis, dont le fidèle Shanks, il va devoir affronter de redoutables pirates dans des aventures toujours plus rocambolesques.
                    Récemment adapté en dessin animé pour la télévision, One Piece remporte un beau succès au Japon.
                    La sortie de ce manga en France permet à Eiichiro Oda de faire montre de tout son talent de graphiste et de narrateur
                </p>
                <button>article</button>
            </div>
        </div>
    </div>
</div>
<?php
include_once('views/includes/footer.php');
?>