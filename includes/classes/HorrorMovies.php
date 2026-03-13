<?php

// general namespace to encapsulate my class' contents
namespace Filmography;

class HorrorMovies
{

    // general variables that most horror movies share
    public $title = '';
    public $franchise = '';
    public $installments = '';
    public $director = '';
    public $villain = '';

    // general string functions that concatenate previously defined variables
    public function getDirector(): string
    {
        return $this->director;
    }

    public function getDescription(): string
    {
        return $this->title . 'is apart of the franchise: ' . $this->franchise . ', and it has ' . $this->installments . ' installments!';
    }

    public function getVillain(): string
    {
        return 'You might recognize ' . $this->villain . ' from ' . $this->title . 'They have appeared in films made by these directors: ' . $this->director . '.';
    }
}
