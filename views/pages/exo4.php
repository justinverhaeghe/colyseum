<div class="container-fluid background" id="home">
    <div class="row">
        <div class="col-12 text-center text-light">

            <h1>Exercice 4</h1>
        </div>
        <div class="col-12 text-center text-light backdrop">


            <p>N'afficher que les clients possédant une carte de fidélité.</p>

            <div class="col-12 text-center text-dark d-flex justify-content-center table-wrapper">
                <table class="fl-table rounded mb-3">
                    <thead>
                        <tr>
                            <th class="bg-primary rounded-start col">Nom</th>
                            <th class="bg-primary col">Prénom</th>
                            <th class="bg-primary rounded-end col">Numéro de carte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($clients as $client) { ?>
                        <tr>
                            <td><?= $client->lastName ?></td>
                            <td><?= $client->firstName ?></td>
                            <td><?= $client->cardNumber ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>