<?php
Session_start();
require_once ('init.php');
$current= 'other';

/*---checks if cart already exist in the current session---*/
if(empty($_SESSION['Cart'])){
    $Session_cart = new Cart();
    $_SESSION['Cart'] = serialize($Session_cart);
}

/*---verifies if we are in the formationView or cartView---*/
if(empty($_POST)& empty($_GET) | isset($_POST['Catalog'])){
    require_once('view/catalog.php');
}

/*---lets you see the specifics of a course---*/
if(isset($_POST["course"])) {
    for($i=0;$i < count($instances); $i++){
        $elem = $instances[$i];
        $elemArr = (array) $elem;
        if ($_POST["course"]==$elemArr['Id'])
            $Formation = $elemArr;
    }
    $_SESSION['Forms'] = serialize($Formation);
    $formArr = (array)$Formation;
    require('view/formationView.php');
}

/*---lets you see what's in the Cart---*/
if(isset($_POST['Cart'])){
    require('view/cartView.php');
}

/*---adds the formation to the cart if clicked on---*/ 
if(isset($_POST["add"])){
    if($_POST["add"]=='Buy'){
        $session_formation = unserialize($_SESSION['Forms']);
        $cart = unserialize($_SESSION['Cart']);
        $cart->addToCart($session_formation);
        $_SESSION['Cart'] = serialize($cart);
        require('view/catalog.php');
    }
    
}

/*---Changes the quantity of the formation you want to buy---*/
if(isset($_POST['Selected']) & isset($_POST['qty'])){
    $Shop_Cart = unserialize($_SESSION['Cart']);
    $Shop_Cart->addQuantity($_POST['Selected'], $_POST['qty']);
    $_SESSION['Cart'] = serialize($Shop_Cart);
    require('view/cartView.php');
}

/*---empties cart if clicked on -> redirects to catalog---*
if(isset($_POST['Cancel'])){
    if($_POST['Cancel']=='empty'){
        $session_cart = new Cart();
        $_SESSION['Cart'] = serialize($session_cart);
        require('view/catalog.php');
    }
}

require_once('view/footer.php');

