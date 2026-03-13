<?php

namespace Filmography;

// this is a subclass of HorrorMovies, and I have used the different genres of movies to express this relationship between the different levels of hierarchy
class Alien extends Extraterrestrial
{
    // to illustrate the use of traits in the context of classes, I have used something shareable by most horror movies to illustrate this relationship
    use PersonalFavourite;
}