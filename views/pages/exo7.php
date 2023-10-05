<div class="container-fluid background" id="home">
    <div class="row">
        <div class="col-12 text-center text-light">

            <h1>Exercice 7</h1>
        </div>
        <div class="col-12 text-center text-light backdrop">


            <p>Afficher tous les clients comme ceci : <br>
                Nom : Nom de famille du client <br>
                Prénom : Prénom du client <br>
                Date de naissance : Date de naissance du client <br>
                Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas) <br>
                Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.</p>

            <div class="col-12 text-center text-dark d-flex justify-content-center list pt-5">

                <table class="fl-table rounded mb-3 backdrop">
                    <thead>
                        <tr>
                            <th class="bg-primary rounded-start col">Nom</th>
                            <th class="bg-primary  col">Prénom</th>
                            <th class="bg-primary  col">Carte de Fidélité</th>
                            <th class="bg-primary rounded-end col">Num de Carte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datas as $data) { ?>
                            <tr>
                                <td><?= $data->lastName ?></td>
                                <td><?= $data->firstName ?></td>
                                <?php if ($data->type == 'Fidélité') { ?>
                                    <td>Oui</td>
                                    <td><?= $data->cardNumber ?></td>
                                <?php } else { ?>
                                    <td>Non</td>
                                    <td></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>