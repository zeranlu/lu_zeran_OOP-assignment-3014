<?php

namespace Filmography;

class Slasher extends HorrorMovies
{
    public function getDescription()
    {
        return parent::getDescription() . 'Most of these slashers have an iconic killer! Look out for ' . $this->villain . ' on the big screen!';
    }
}