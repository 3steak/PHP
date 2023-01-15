<!--  Je recupère mon fichier class.php -->
<?php require 'class.php';

//  je crée mes objets
$remi = new Student('Rémi', '17/06');

// echo $remi->firstname;
// echo '<br>';
// echo $remi->birthday;
// echo '<br>';

$mika = new Student('Michaël', '15/05');
$flo = new Student('Florian', '29/03');
$stephanie = new Student('Stéphanie', '20/08');
$perrine = new Student('Perrine', '09/11');
$salah = new Student('Salah', '17/03');
$fatim = new Student('FatimZahra', '24/03');

// Je les stock dans un tableau
$studentsArray = array(
    $remi,
    $mika,
    $flo,
    $stephanie,
    $perrine,
    $salah,
    $fatim
);

//  j'encode mon tableau au format JSON
$json_students = json_encode($studentsArray);

// J'ajoute mon tableau d'objet au fichier studentsInfo.json

$students = file_put_contents("C:\laragon\www\partie9\TP\studentsInfo.json", $json_students);
