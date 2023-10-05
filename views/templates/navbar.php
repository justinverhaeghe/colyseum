<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">COLYSEUM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 1) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo1-ctrl.php">Exercice 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 2) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo2-ctrl.php">Exercice
                        2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 3) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo3-ctrl.php">Exercice 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 4) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo4-ctrl.php">Exercice 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 5) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo5-ctrl.php">Exercice 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 6) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo6-ctrl.php">Exercice 6</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($ex == 7) ? 'active' : ''; ?>" aria-current="page"
                        href="/controllers/exo7-ctrl.php">Exercice 7</a>
                </li>
            </ul>
        </div>
    </div>
</nav>