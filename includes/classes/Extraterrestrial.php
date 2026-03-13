<?php

namespace Filmography;

class Extraterrestrial extends HorrorMovies
{
    public $attribute = 'Be wary of the infinite space void and its alien inhabitants!';

    public function getInvasionWarning() {
        return 'WARNING: ALIEN INVATION IMMINENT: ' . $this->attribute;
    }
}