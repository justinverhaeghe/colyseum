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
                            <th class="bg-primary">Type</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($showtypes as $data) { ?>
                            <tr>
                                <td><?= $data->type ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>