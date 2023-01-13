<!--  Je recupère mon fichier class.php -->
<?php require 'class.php';

//  je crée mes objets
$remi = new Student('Rémi', '898034400');

// echo $remi->firstname;
// echo '<br>';
// echo $remi->birthday;
// echo '<br>';

$mika = new Student('Michaël', '705542400');
$flo = new Student('Florian', '985824000');
$stephanie = new Student('Stéphanie', '430185600');
$perrine = new Student('Perrine', '-5369241600');
$salah = new Student('Salah', '574560000');
$fatim = new Student('FatimZahra', '228009600');

// Je les stock dans un tableau
$studentsArray = [
    $remi,
    $mika,
    $flo,
    $stephanie,
    $perrine,
    $salah,
    $fatim
];

//  j'encode mon tableau au format JSON
$json_students = json_encode($studentsArray);

// J'ajoute mon tableau d'objet au fichier studentsInfo.json

$students = file_put_contents("C:\laragon\www\partie9\TP\studentsInfo.json", $json_students);
