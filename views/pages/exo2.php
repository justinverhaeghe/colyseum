<div class="container-fluid background" id="home">
    <div class="row">
        <div class="col-12 text-center text-light">

            <h1>Exercice 2</h1>
        </div>
        <div class="col-12 text-center text-light backdrop">


            <p>Afficher tous les types de spectacles possibles.</p>

            <div class="col-12 text-center text-dark d-flex justify-content-center table-wrapper">
                <table class="fl-table mb-3">
                    <thead>
                        <tr>
                            <th class="bg-primary col">Titre</th>
                            <th class="bg-primary col">Performeur</th>
                            <th class="bg-primary col">Date</th>
                            <th class="bg-primary col">Durée</th>
                            <th class="bg-primary col">Heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas as $data) { ?>
                        <tr>
                            <td><?= $data['title'] ?></td>
                            <td><?= $data['performer'] ?></td>
                            <td><?= $data['date'] ?></td>
                            <td><?= $data['duration'] ?></td>
                            <td><?= $data['startTime'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>