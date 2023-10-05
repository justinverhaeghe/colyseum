<div class="container-fluid background" id="home">
    <div class="row">
        <div class="col-12 text-center text-light">

            <h1>Exercice 6</h1>
        </div>
        <div class="col-12 text-center text-light backdrop">


            <p>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par
                ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le {date} à {heure}.</p>

            <div class="col-12 text-center text-dark d-flex justify-content-center list pt-5">
                <ul>
                    <?php
                    foreach ($shows as $show) { ?>
                        <li>
                            <?= $show->title ?> par <?= $show->performer ?>, le <?= $show->date ?> à
                            <?= $show->startTime ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>

        </div>
    </div>
</div>