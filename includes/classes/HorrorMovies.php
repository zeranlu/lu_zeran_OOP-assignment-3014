<?php

namespace Filmography;

class HorrorMovies
{
    $title = '';
    $franchise = '';
    $installments = '';
    $director = '';
    $villain = '';

    public function getDirector()
    {
        return $this->director;
    }

    public function getDescription()
    {
        return $this->title . 'is apart of the franchise: ' . $this->franchise . ', and it has ' . $this->installments . ' installments!';
    }

    public function getKiller()
    {
        return 'You might recognize ' . $this->villain . ' from ' . $this->title . 'They have appeared in films made by these directors: ' . $this->director . '.';
    }
}
