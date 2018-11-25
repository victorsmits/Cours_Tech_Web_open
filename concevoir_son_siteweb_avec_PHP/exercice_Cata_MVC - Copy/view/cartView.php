<!-->Cart</!-->
<div class="container">
    <h2>Shopping Cart</h2>
    <div class="col-md-8">
        <div class="tableCart  table-responsive">          
                <?php 
                    $cart = unserialize($_SESSION['Cart']);
                    if (!empty($cart)){
                        $products = $cart->CartArray ;
                        $quantity = $cart->QuantityArray ;
                        $amount = $cart->Count ;
                    }
                    if(empty($cart)|empty($products)){
                        echo '<div><h2>CART EMPTY</h2></div>';
                    }
                    if (!empty($products)){
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>COURSE</th>
                                    <th></th>
                                    <th>DATE</th>
                                    <th></th>
                                    <th>QUANTITY</th>
                                    <th>PRICE</th>
                                </tr>
                            </thead>
                            <tbody class="tbody-cart"> 
                        <?php
                        for ($i=0 ; $i < count($products); $i++){
                            $elem = $products[$i];
                            $nbr = $i+1;
                            echo '<tr>';
                            echo '<td>' .$nbr.'</td>';
                            echo '<td>'.($elem['Title']).'<td>';
                            echo '<td>'.($elem['Time']).'<td>';
                            ?>
                                <td><form method='post' class="formslt">
                                        <input type='hidden' name='Selected' value="<?php echo $elem['Title']?>">
                                        <input class="selectpicker btn btn-default" list="qty" onchange="this.form.submit()" name="qty" placeholder="<?php echo $quantity[$elem['Title']]?>">
                                        <datalist id='qty'>
                                            <option value='1'>
                                            <option value='2'>
                                            <option value='3'>
                                            <option value='4'>
                                            <option value='5'>
                                        </datalist>
                                </form><br>
                                <div><b>SUB-TOTAL</b></div>
                                </td>';
                            <?php    
                            echo '<td>'.($elem['Price']).' € <br><br><div class="subtotal">'.$elem['Price'] * $quantity[$elem['Title']]. '€</div><td>';
                            echo '</td>';
                        }
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    </div>                                                                                    
    
    <div class="col-md-4">
        <div>
            <h3>Total : <?php echo ($amount) ?> €</h3>
            
        </div>
        <div>
            <form class="form-horizontal" method="post">
                <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="PP1 btn btn-default" name="Cancel" value="empty">Empty Cart</button>
                        <button type="submit" class="btn btn-primary" name="page_suivante">Confirm Cart</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
</div>