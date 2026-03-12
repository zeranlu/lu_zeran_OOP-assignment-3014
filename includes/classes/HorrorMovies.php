<?php

namespace Filmography;

class HorrorMovies
{
    public $title = '';
    public $franchise = '';
    public $installments = '';
    public $director = '';
    public $villain = '';

    public function getDirector()
    {
        return $this->director;
    }

    public function getDescription()
    {
        return $this->title . 'is apart of the franchise: ' . $this->franchise . ', and it has ' . $this->installments . ' installments!';
    }

    public function getVillain()
    {
        return 'You might recognize ' . $this->villain . ' from ' . $this->title . 'They have appeared in films made by these directors: ' . $this->director . '.';
    }
}
