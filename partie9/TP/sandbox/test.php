<?php

// Je stock les valeurs des inputs dans mes variables
if (!empty($_POST['month']) && !empty($_POST['year'])) {
    $month = $_POST['month'];
    $year = $_POST['year'];
}


// nombre de jour dans le mois de l'année donnée
$number = cal_days_in_month(CAL_GREGORIAN, (int)$month, (int)$year);

$months = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
];
// Je convertis mon month (int) en string
$monthToString = $months[$month - 1];


// Recupere le 1 er jour du mois donné
date_default_timezone_set('Europe/Paris');
$firstDayOfMonth = date("N", mktime(0, 0, 0, (int)$month, 1, (int)$year));
?>


<!--  HTML  -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/partie9/TP/public/assets/css/styleTP.css">
    <title>CALENDRIER</title>
</head>

<body>
    <section class=" p-4 ">
        <form action="#" method="post" class="d-flex gap-2 m-4">
            <div class="select1">
                <select class="form-select" name="month" aria-label="Default select example">
                    <option selected>Choisissez un mois</option>
                    <option value="1">Janvier</option>
                    <option value="2">Fevrier</option>
                    <option value="3">Mars</option>
                    <option value="4">Avril</option>
                    <option value="5">Mai</option>
                    <option value="6">Juin</option>
                    <option value="7">Juillet</option>
                    <option value="8">Août</option>
                    <option value="9">Septembre</option>
                    <option value="10">Octobre</option>
                    <option value="11">Novembre</option>
                    <option value="12">Décembre</option>
                </select>
            </div>
            <div class="select2">
                <select class="form-select" name="year" aria-label="Default select example">
                    <option selected>Choisissez l'année</option>
                    <?php
                    for ($selectYear = 2023; $selectYear > 1970; $selectYear--) {
                        echo '<option  value=' . $selectYear . '>' . $selectYear . '</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">VOIR</button>
        </form>
        <div class="calendar mx-auto m-4">
            <div class="calendar__picture py-4">
                <h2><?= $monthToString ?></h2>
                <h3><?= $year ?></h3>
            </div>
            <div class="calendar__date">
                <div class="calendar__day">L</div>
                <div class="calendar__day">M</div>
                <div class="calendar__day">M</div>
                <div class="calendar__day">J</div>
                <div class="calendar__day">V</div>
                <div class="calendar__day">S</div>
                <div class="calendar__day">D</div>

                <!-- Je créais des div vide selon quel est le premier jour du mois  -->
                <!-- Je créais des divs en fonction du nombre de jours dans le mois -->

                <?php
                for ($day = 1; $day < $firstDayOfMonth; $day++) {
                    echo '<div class="calendar__number"></div>';
                };
                for ($days = 1; $days <= $number; $days++) {
                    echo '<div class="calendar__number">' . $days . '</div>';
                };
                ?>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/partie9/TP/public/assets/js/scriptTP.js"></script>
</body>

</html>