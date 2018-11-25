<div class="container">
    <h2>Shopping Cart</h2>
    <div class="col-md-8">
        <div class="tableCart  table-responsive">          
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>COURSE</th>
                    <th></th>
                    <th>DATE</th>
                    <th></th>
                    <th>PRICE</th>
                </tr>
            </thead>
            <tbody class="tbody-cart">  
                <?php 
                    $cart = unserialize($_SESSION['Cart']);
                    if (!empty($cart)){
                        $products = $cart->CartArray;
                        $amount = $cart->Count;
                    }
                    if (!empty($products)){
                        for ($i=0 ; $i < count($products); $i++){
                            $elem = $products[$i];
                            $nbr = $i+1;
                            echo '<tr>';
                            echo '<td>' .$nbr.'</td>';
                            echo '<td>'.($elem['Title']).'<td>';
                            echo '<td>'.($elem['Time']).'<td>';
                            echo '<td>'.($elem['Price']).' €<td>';
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