<?php

namespace Filmography;

trait PersonalFavourite
{
    public $rating = '10/10';
    public $reason = '';
    public $recommendation = '';    

    public function getRating()
    {
        return 'GOATED MOVIE, EASY ' . $this->rating . '.';    
    }

    public function getReason()
    {
        return 'This is a personal favourite because ' . $this->reason . "If you're interested in this recommendation, give this series: " . $this->recommendation . " a try!";
    }
}