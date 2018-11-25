<?php
class Cart 
{   
    // Initialisation variables
    public $cartArray;
    public $count;
    public $quantityArray;
    
    public function __construct()
    {
        $this->CartArray = [];
        $this->Count = 0;
        $this->QuantityArray = [];
    }
    
    /*---adding formation to the cart---*/
    public function addToCart($product)
    {   
        // verify if productisn't already in the cart
        if(! in_array($product,$this->CartArray)){ 
            array_push($this->CartArray, $product);
        }
        $this->QuantityArray[$product['Title']] += 1;
        $this->countTotal($product['Price']);
    }
    
    /*---adds up the price for each formation added => Total price---*/ 
    public function countTotal($price)
    {
        $this->Count = 0; // otherwise keeps adding up without returning to zero
        // example if we put 5 and than 3, if we didn't do line 29, it would multiply the price with 8 and not 3
        for($i=0; $i<count($this->CartArray); $i++){
            $elem = $this->CartArray[$i];
            $price = (int)$elem['Price'];
            $quantity = $this->QuantityArray[$elem['Title']];
            $this->Count += $price * $quantity;
        } 
    }
    
    /*---Changes the quantity of formation you want---*/
    public function addQuantity($course, $quantity){
        $this->QuantityArray[$course] = $quantity;
        for ($i=0; $i<count($this->CartArray); $i++) {
            $elem = $this->CartArray[$i];
            if($elem['Title'] == $course){
                $this->countTotal($elem['Price']);
            }
        }
    }
}









