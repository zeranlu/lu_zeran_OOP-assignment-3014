<?php

namespace Filmography;

class Slasher extends HorrorMovies
{   
    public $attribute = 'Be wary of neighbourhood psycho killers! Hide in your closets!';

    public function getKillerWarning() {
        return "Keep running and don't turn back! Don't trip on sticks, and hope the final girls saves you!" . $this->attribute;
    }    

    public function getDescription()
    {
        return parent::getDescription() . 'Most of these slashers have an iconic killer! Look out for ' . $this->villain . ' on the big screen!';
    }
}