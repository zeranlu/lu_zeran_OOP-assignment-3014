<?php 

namespace Filmography;


trait FoundFootage
{

    // I used the idea of sub genres to further illustrate how traits can be a shared identity across multiple franchises and different movies, a movie like REC happens to be a zombie, possession, and found footage film all at once, so it should be able to inherit similar traits and not be boxed into only one genre of being a zombie movie
    public $perspective = '';
    public $footageMedium = '';

    public function getPointOfInterest():string 
    {
        return 'This movie uniquely uses the ' . $this->perspective . ' to show an interesting take on genre. It also utilises the ' . $this->footageMedium . ' to capture its scares and drama very effectively.';
    }
}