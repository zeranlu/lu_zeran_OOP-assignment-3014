<?php 

namespace Filmography;

trait FoundFootage
{
    public $perspective = '';
    public $footageMedium = '';

    public function getPointOfInterest() {
        return 'This movie uniquely uses the ' . $this->perspective . ' to show an interesting take on genre. It also utilises the ' . $this->footageMedium . ' to capture its scares and drama very effectively.';
    }
}