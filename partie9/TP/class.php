<?php
//  Création de la class BirthdayOf {
class Student
{
    //  création des propriétés et méthodes 

    public $firstname;
    public $birthday;

    // création du firstname
    function __construct(string $firstname, string $birthday)
    {
        $this->firstname = $firstname;
        $this->birthday = $birthday;
    }

    //  recuperation du firstname
    function get_firstname()
    {
        return $this->firstname;
    }


    //  récupération de la date
    function get_birthday()
    {
        return $this->birthday;
    }
};
