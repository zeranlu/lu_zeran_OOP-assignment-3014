<?php

namespace Filmography;


// general logic breakdown: I use relationship of horror movies and its various genres and franchises to illustrate the hierarchy of class(es). additionally I use an easily shared quality of these movies to illustrate how classes can inherit traits
class Zombie extends HorrorMovies
{

// for the second level classes, I added some genre specific functions to illustrate the increasing specificity of each class in relation to its parent
    public $attribute = 'Be wary of the brain eating undead horde, they never end!';

    public function getZombieWarning(): string 
    {
        return "In a world of flesh eating zombies, it's other humans that are still the most dangerous, keep your friends close, but your enemies closer!" . $this->attribute;
    }    

    public function getHistory(): string 
    {
        return "If these movies terrify and intrigue you, make sure to check out the works of this classic director!" . $this->director;
    }
}