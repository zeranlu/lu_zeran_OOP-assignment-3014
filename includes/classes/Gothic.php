<?php

namespace Filmography;



// general logic breakdown: I use relationship of horror movies and its various genres and franchises to illustrate the hierarchy of class(es). additionally I use an easily shared quality of these movies to illustrate how classes can inherit traits
class Gothic extends HorrorMovies
{

// for the second level classes, I added some genre specific functions to illustrate the increasing specificity of each class in relation to its parent
    public $attribute = 'Be wary of distant curses and evils, they may be closer to home than you expect...';

    public function getGothicWarning():string 
    {
        return 'Keep your doors locked, and stock up on garlics. ' . $this->attribute;
    }
}