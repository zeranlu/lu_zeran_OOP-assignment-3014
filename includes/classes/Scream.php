<?php

namespace Filmography;

// this example shows the hierarchy doesn't have to inherit all traits
class Scream extends Slasher
{
    use PersonalFavourite;
}