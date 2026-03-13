<?php

namespace Filmography;


// general logic breakdown: I use relationship of horror movies and its various genres and franchises to illustrate the hierarchy of class(es). additionally I use an easily shared quality of these movies to illustrate how classes can inherit traits
class Slasher extends HorrorMovies
{   

    // here I illustrate how traits can be inherited at all levels of the hierarchy and not just limited to third level (specific) franchises
    use PersonalFavourite;


    // for the second level classes, I added some genre specific functions to illustrate the increasing specificity of each class in relation to its parent
    public $attribute = 'Be wary of neighbourhood psycho killers! Hide in your closets!';

    public function getKillerWarning(): string 
    {
        return "Keep running and don't turn back! Don't trip on sticks, and hope the final girls saves you!" . $this->attribute;
    }    

    public function getIconDescription(): string
    {
        return parent::getDescription() . 'Most of these slashers have an iconic killer! Look out for ' . $this->villain . ' on the big screen!';
    }
}