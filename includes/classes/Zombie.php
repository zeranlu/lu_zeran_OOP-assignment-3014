<?php

namespace Filmography;

class Zombie extends HorrorMovies
{
    public $attribute = 'Be wary of the brain eating undead horde, they never end!';

    public function getZombieWarning() {
        return "In a world of flesh eating zombies, it's other humans that are still the most dangerous, keep your friends close, but your enemies closer!" . $this->attribute;
    }    

    public function getHistory() {
        return "If these movies terrify and intrigue you, make sure to check out the works of this classic director!" . $this->director;
    }
}