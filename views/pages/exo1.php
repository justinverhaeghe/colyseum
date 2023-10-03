<div class="container-fluid background" id="home">
    <div class="row">
        <div class="col-12 text-center text-light">

            <h1>Exercice 1</h1>
        </div>
        <div class="col-12 text-center text-light backdrop">


            <p>Afficher tous les clients.</p>

            <div class="col-12 text-center text-dark d-flex justify-content-center table-wrapper">
                <table class="fl-table mb-3">
                    <thead>
                        <tr>
                            <th class="bg-primary col">Nom</th>
                            <th class="bg-primary col">Prénom</th>
                            <th class="bg-primary col">Date de Naissance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas as $data) { ?>
                        <tr>
                            <td><?= $data['lastName'] ?></td>
                            <td><?= $data['firstName'] ?></td>
                            <td><?= $data['birthDate'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>