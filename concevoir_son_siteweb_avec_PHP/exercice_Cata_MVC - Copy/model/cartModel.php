<?php
class Cart 
{   
    public $cartArray;
    public $count;
    
    public function __construct()
    {
        $this->CartArray = [];
        $this->Count = 0;
    }
    
    /*---adding formation to the cart---*/
    public function addToCart($product)
    {   
        // verify if productisn't already in the cart
        if(! in_array($product,$this->CartArray)){ 
            $elem = (array)$product;
            $price = (int)$elem['Price'];
            $this->countTotal($price);
            // array_push($array, elem1, elem2,...)
            return array_push($this->CartArray, $product);
        }
        // product is already in the cart, you can take it again
        else{
            return $this->CartArray;
        }
    }
    
    /*---adds up the price for each formation added---*/ 
    public function countTotal($price)
    {
        return $this->Count += $price;
    }
}
