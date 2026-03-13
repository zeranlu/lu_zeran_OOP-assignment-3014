<?php

namespace Filmography;

class Gothic extends HorrorMovies
{
    public $attribute = 'Be wary of distant curses and evils, they may be closer to home than you expect...';

    public function getGothicWarning() {
        return 'Keep your doors locked, and stock up on garlics. ' . $this->attribute;
    }
}