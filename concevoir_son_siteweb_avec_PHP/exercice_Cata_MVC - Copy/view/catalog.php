<?php 
for($i=0;$i < count($instances); $i++){
    $elem = $instances[$i];
    $elemArr = (array) $elem;
    if (($i%6==0)|($i==0)){
        $class = "panel panel-primary";
    } else if ($i%6==1){
        $class = "panel panel-danger";
    } else if ($i%6==2){
        $class = "panel panel-success";
    } else if ($i%6==3){
        $class = "panel panel-default";
    } else if ($i%6==4){
        $class = "panel panel-warning";
    } else if ($i%6==5){
        $class = "panel panel-info";
    }
        
    if (($i==0)|($i%3==0)) {
        ?>
        <div class="container">    
            <div class="row">
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                            <div class="panel-body">
                                <form method="post">
                                    <button id="close-image" name="course" value="<?php echo $elemArr['Title']?>"> 
                                    <?php
                                    $filepath= $elemArr['Image'];
                                    echo '<img src="'.$filepath.'" class="img-responsive" style="width:100%" alt="Image">'
                                    ?> 
                                    </button>
                                </form>
                            </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>    
        <?php    
    } 
    
    else if ($i%3==2){
        ?>
        
                <div class="col-sm-4">
                    <div class="<?php echo $class;?>">
                        <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                            <div class="panel-body">
                                <form method="post">
                                    <button id="close-image" name="course" value="<?php echo $elemArr['Title']?>"> 
                                    <?php
                                    $filepath= $elemArr['Image'];
                                    echo '<img src="'.$filepath.'" class="img-responsive" style="width:100%" alt="Image">'
                                    ?> 
                                    </button>
                                </form>
                            </div>
                        <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                    </div>
                </div>
            </div>
        </div>
        <?php  
    }
    else {
        ?>
        
            <div class="col-sm-4">
                <div class="<?php echo $class;?>">
                    <div class="panel-heading"><?php echo $elemArr['Title']?></div>
                        <div class="panel-body">
                            <form method="post">
                                <button id="close-image" name="course" value="<?php echo $elemArr['Title']?>"> 
                                <?php
                                $filepath= $elemArr['Image'];
                                echo '<img src="'.$filepath.'" class="img-responsive" style="width:100%" alt="Image">'
                                ?> 
                                </button>
                            </form>
                        </div>
                    <div class="panel-footer"><?php echo $elemArr['Price']?>€</div>
                </div>
            </div>
            
        <?php  
    }
}

    