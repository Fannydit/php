<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Exercices php - Partie 4 les tableaux</title>
</head>

<body>
    <header class="">

        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice1.php">Exercice 1</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice3.php">Exercice 3</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice4.php">Exercice 4</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice5.php">Exercice 5</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice6.php">Exercice 6</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice7.php">Exercice 7</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice8.php">Exercice 8</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice9.php">Exercice 9</a>
                    </li>
                    <li class="nav-item mt-5 ms-5">
                        <a class="nav-link" style="color: white;" href="./exercice10.php">Exercice 10</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <h1>PHP- Partie 5 : les tableaux</h1>

    <div class="ex">
        <h4>Exercice 5</h4>
        <p>Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.</p>
        <p>Réponse :</p>

        <?php
        $hdf = [
            2 => "Aisne",
            59 => "Nord",
            60 => "Oise",
            62 => "Pas-de-Calais",
            80 => "Somme",
        ];

        ?>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>