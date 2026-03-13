<?php

namespace Filmography;

class Possesion extends HorrorMovies
{
    public $attribute = 'Be wary of the world of demonology, evils lurk around every corner!';

    public function getDemonicWarning() {
        return 'I hope you have holy water nearby! ' . $this->attribute;
    }
}