<?php

namespace Filmography;

// this example show how the hierarchy can inherit all/multiple traits
class REC extends Zombie
{
    use PersonalFavourite;
    use FoundFootage;
}