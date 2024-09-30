<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Airport Assistanc - <?= $title; ?></title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="img/aero-asist-icon.png"/>

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div id="app">
        <nav class="navbar navbar-expand-lg navmodificado separador">
            <div class="container-fluid">
                <div class="left">
                    <a class="navbar-brand" href="<?= url('inicio') ?>"><img src="img/aero-asist-02.png" alt="logo de AeroAsist" class="logo-nav"></a>
                </div>
                <div class="right">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= url('inicio') ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= url('quienes-somos') ?>">Quienes somos</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="<?= url('servicios') ?>">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= url('novedades') ?>">Novedades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= url('contactanos') ?>">Contactanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-secondary" href="<?= url('admin/novedades') ?>">Ingresar</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


        <main class="container p-4">

            <?= $slot; ?>

        </main>


        <footer class="footer">
            <p>Copyright &copy; Portales y comercio electrónico - Bustos - Paoliello 2024</p>
        </footer>
    </div>
</body>

</html>