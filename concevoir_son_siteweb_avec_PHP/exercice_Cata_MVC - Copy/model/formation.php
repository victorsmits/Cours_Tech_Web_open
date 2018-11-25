<?php
class Formation
{
    // initialization variables
    public $title;
    public $obj;
    public $price;
    public $time;
    public $image;
    public $caption;
    public $captionWriter;
    
    public function __construct($atitle,$adesc,$aprice,$atime,$aimage,$acaption,$acaptionWriter)
    {
        $this->Title = $atitle;
        $this->Obj = $adesc;
        $this->Price = $aprice;
        $this->Time = $atime;
        $this->Image = $aimage;
        $this->Caption = $acaption;
        $this->Writer = $acaptionWriter;
    }
}

// Array of all the objects constructed from the same class
function get_instances_of_class($class) {
    $instances = array();

    foreach ($GLOBALS as $value) {
        if (is_a($value, $class) || is_subclass_of($value, $class)) {
            array_push($instances, $value);
        }
    }

    return $instances;
}

