<?php
$studentsInfo = file_get_contents("C:\laragon\www\partie9\TP\studentsInfo.json");
$studentsInfo = json_decode($studentsInfo);


// Je stock les valeurs des inputs dans mes variables
if (empty($_POST['month']) || empty($_POST['year'])) {
    $alert = 'Veuillez selectionner un mois et une année';
    $month = '1';
    $year = '2023';
} else {
    $month = $_POST['month'];
    $year = $_POST['year'];
};
// nombre de jour dans le mois donnée
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, (int)$month, (int)$year);



$months = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
];
//  month (int) en string
$monthToString = $months[$month - 1];


// 1 er jour du mois donné en lettres
date_default_timezone_set('Europe/Paris');
$firstDayOfMonth = date("N", mktime(0, 0, 0, (int)$month, 1, (int)$year));

// Calcul du nombre de jour du mois précédent
$daysInMonthBefore = date("t", mktime(0, 0, 0, (int)$month - 1, 1, (int)$year));
?>

<!--  HTML  -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../sandbox/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script defer src="./script.js"></script>

    <title>CALENDRIER</title>
</head>

<body>
    <section class=" p-4 ">

        <div class="calendar mx-auto mt-2 mb-4">
            <div class="calendar__picture py-4 ">
                <div class="text-center d-flex">
                    <div class="me-4">
                        <h2><?= $monthToString ?></h2>
                        <h3><?= $year ?></h3>
                    </div>


                    <form action="#" method="post" class="d-flex gap-2 m-2 mx-auto">
                        <div class="select1  my-auto">
                            <select class="form-select" name="month" aria-label="Default select example">
                                <!-- faire un if sur l'option -->
                                <!-- SI $key+1 == $month -->
                                <option value="">Choisissez un mois</option>
                                <?php
                                foreach ($months as $key => $selectMonth) {
                                    if (isset($_POST['month']) && $key + 1 === (int)$_POST['month']) {
                                        echo '<option  value=' . $key + 1 . ' ' . 'selected' .  '>' . $selectMonth . '</option>';
                                    } else {
                                        echo '<option value=' . $key + 1 . ' >' . $selectMonth . '</option>';
                                    };
                                }
                                ?>
                            </select>
                        </div>
                        <div class="select2 my-auto">
                            <select class="form-select" name="year" aria-label="Default select example">
                                <option value="">Choisissez l'année</option>
                                <?php

                                for ($selectYear = 2030; $selectYear > 1970; $selectYear--) {
                                    if (isset($_POST['year']) && $selectYear === (int)$_POST['year']) {
                                        echo '<option  value=' . $selectYear . ' ' . 'selected' .  '>' . $selectYear . '</option>';
                                    } else {
                                    };
                                    echo '<option  value=' . $selectYear .  '>' . $selectYear . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary text-white "><i class="fa-regular fa-calendar-days me-2"></i> VOIR</button>
                    </form>
                </div>
                <!-- Message d'erreur si un select n'est pas rempli -->
                <small class="text-white bg-opacity-75 bg-dark d-flex justify-content-center"><?= $alert ?? '' ?></small>

            </div>
            <div class="calendar__date">
                <div class="calendar__day">L</div>
                <div class="calendar__day">M</div>
                <div class="calendar__day">M</div>
                <div class="calendar__day">J</div>
                <div class="calendar__day">V</div>
                <div class="calendar__day">S</div>
                <div class="calendar__day">D</div>

                <!--  Création des div vide selon quel est le premier jour du mois   -->
                <!--  Création des div en fonction du nombre de jours dans le mois  -->
                <?php
                // Affichage des jours avant le mois séléctionné
                for ($day = ($daysInMonthBefore - ($firstDayOfMonth - 2)); $day <= $daysInMonthBefore; $day++) {
                    echo '<div class="calendar__number bg-dark bg-opacity-25 text-white">' . $day . '</div>';
                };

                //  Affichage des jours du mois 
                for ($days = 1; $days <= $daysInMonth; $days++) {
                    //  Je formate la date JJ/MM
                    $formatedMonth = $month < 10 ? "0$month" : $month;
                    $formatedDays = (int)$days < 10 ? "0$days" : $days;
                    $formatedDate = "$formatedDays/$formatedMonth";
                    // Je déclare une variable vide pour la sortir de mon foreach
                    $studentFirstname = "";
                    // Je boucle mon tableau d'objet
                    foreach ($studentsInfo as $student) {
                        if ($formatedDate === $student->birthday) {
                            $studentBirthday = $student->birthday;
                            // Le .= ajoute un contenu dans une variable à la suite du contenu existant
                            $studentFirstname .= '<i class="fa-solid fa-xs fa-cake-candles m-2"></i>' . $student->firstname;
                        }
                    };
                    echo '<div class="calendar__number">' . $days . '<br>' . $studentFirstname . '</div>';
                };
                // Affichage des jours après le mois séléctionné
                for ($day = 1; $day <= 31; $day++) {
                    $isSunday = date("w", mktime(0, 0, 0, (int)$month + 1, $day, (int)$year));
                    if ($isSunday === '0') {
                        echo '<div class="calendar__number  bg-dark bg-opacity-25 text-white">' . $day . '</div>';

                        break;
                    }
                    echo '<div class="calendar__number bg-dark bg-opacity-25 text-white">' . $day . '</div>';
                };


                ?>

            </div>
        </div>
    </section>
    <script src="tilt.jquery.js"></script>
</body>

</html>