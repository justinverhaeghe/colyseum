<div class="container-fluid background" id="home">
    <div class="row">
        <div class="col-12 text-center text-light">

            <h1>Exercice 5</h1>
        </div>
        <div class="col-12 text-center text-light backdrop">


            <p>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
                Les afficher comme ceci :
                Nom : Nom du client
                Prénom : Prénom du client
                Trier les noms par ordre alphabétique.</p>

            <div class="col-12 text-center text-dark d-flex justify-content-center table-wrapper">
                <table class="fl-table rounded mb-3">
                    <thead>
                        <tr>
                            <th class="bg-primary rounded-start col">Nom</th>
                            <th class="bg-primary rounded-end col">Prénom</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($clients as $client) { ?>
                            <tr>
                                <td><?= $client->lastName ?></td>
                                <td><?= $client->firstName ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>