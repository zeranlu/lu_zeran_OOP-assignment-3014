<?php

namespace Filmography;


// general logic breakdown: I use relationship of horror movies and its various genres and franchises to illustrate the hierarchy of class(es). additionally I use an easily shared quality of these movies to illustrate how classes can inherit traits
class TheConjuring extends Possesion
{
    use PersonalFavourite;

}