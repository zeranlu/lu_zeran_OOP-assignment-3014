<?php

namespace Filmography;

// this trait is a general, able to be applied to all horror movies, I wanted to show how traits can be adaptive on range of (very common -> not so common), also it was fun
trait PersonalFavourite
{
    public $rating = '10/10';
    public $reason = '';
    public $recommendation = '';    

    public function getRating(): string
    {
        return 'GOATED MOVIE, EASY ' . $this->rating . '.';    
    }

    public function getReason(): string
    {
        return 'This is a personal favourite because ' . $this->reason . "If you're interested in this recommendation, give this series: " . $this->recommendation . " a try!";
    }
}