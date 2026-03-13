<?php

namespace Filmography;


// general logic breakdown: I use relationship of horror movies and its various genres and franchises to illustrate the hierarchy of class(es). additionally I use an easily shared quality of these movies to illustrate how classes can inherit traits
class Possesion extends HorrorMovies
{

// for the second level classes, I added some genre specific functions to illustrate the increasing specificity of each class in relation to its parent
    public $attribute = 'Be wary of the world of demonology, evils lurk around every corner!';

    public function getDemonicWarning(): string 
    {
        return 'I hope you have holy water nearby! ' . $this->attribute;
    }
}