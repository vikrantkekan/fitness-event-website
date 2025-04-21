



<div id="slider_car" class="container-fluid" style="padding-bottom: 0px;">

<div id="myCarousel" class="dnt_show_mbl carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
      <div class="item active ">
        <img src="https://<?php echo base_url();?>images/cart.png" alt="Vivedaa" style="width:100%;">
        
        </div>
</div>
</div>


<!---mobile-->

<div id="myCarousel_main_mob" class="carousel slide dontdisplaylg" data-ride="carousel">
 <div class="carousel-inner ">
     <div class="item active"> 
        <img src="https://<?php echo base_url();?>images/cart.png" alt="Vivedaa" style="width:100%;">
    </div>
    </div>
</div>
</div>


<div class="container-fluid" style="background-color: #F2F2F2;">

<!---card set-1--->
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr style="color:#000;font-size:16px;">
                        <th></th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

<?php

//print_r($cart);

if(!isset($cart)){
    header('location:http://'.base_url());
}

$shipping=0;
$subtotal=0;

foreach ($cart as $c){

?>

                    <tr style="color:#333;font-size:14px;">
<td></td>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">

    <a style="background-color: transparent;" class="thumbnail pull-left" href="https://<?php echo base_url();?>/Vivedaa-Hair-Oil/1"> 

    <img class="media-object" src="https://<?php echo base_url();?>images/Viveda-hair-oil.png" style="width: 72px;"> </a>

                            <div class="media-body">
                                <h4 class="media-heading" style="color:#000;">
                                <a style="color:#000;" href="https://<?php echo base_url();?>/Vatashi-Mini/1"><?php echo str_replace('%20',' ',$c['name']);?></a></h4>

                                <h5 class="media-heading"> by <a href="#">Vivedaa Organix</a></h5>
                                <span>Status: </span><span class="text-success"><strong>In Stock</strong></span>
                            </div>
                        </div></td>


                      <td class="col-sm-1 col-md-1" style="text-align: center">
                <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $c['qty'];?>">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $c['oprice'];?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $c['qty']*$c['oprice'];?></strong></td>

                        <td  class="col-sm-1 col-md-1">
                        <a href="https://<?php echo base_url();?>remove-from-cart/<?php echo $c['posid'];?>" type="button" class="btn btn-default" style="background-color:transparent;border-radius: 0px;">
                            <span class="glyphicon glyphicon-remove"></span>&nbsp; Remove 
                        </a></td>

                    </tr>
                    
<?php

$shipping=$shipping+(int)$c['delivery'];
$subtotal=$subtotal+$c['qty']*$c['oprice'];

}
?>

                    <tr>
                       <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5 style="color:#000;font-size:16px;">Subtotal</h5></td>
                        <td class="text-right"><h5 style="color:#000;font-size:16px;"><strong><?php echo $subtotal;?></strong></h5></td>
                    </tr>
                    <tr>
                       <td>  </td>
                        <td> </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h5 style="color:#000;font-size:16px;">Estimated shipping</h5></td>
                        <td class="text-right"><h5 style="color:#000;font-size:16px;"><strong><?php echo $shipping;?></strong></h5></td>
                    </tr>
                    <tr>
                       <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td><h3 style="color:#000;font-size:16px;">Total</h3></td>
                        <td class="text-right"><h3 style="color:#000;font-size:16px;"><strong><?php echo $subtotal+$shipping;?></strong></h3></td>
                    </tr>
                    <tr>
                       <td>  </td>
                        <td>  </td>
                        <td> </td>
                        <td>  </td>
                        <td>
                        <a href="http://<?php echo base_url();?>" type="button" class="btn btn-default" style="border-radius: 0px;">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </a></td>
                        <td>

                        <a href="http://<?php echo base_url();?>Checkout" type="button" class="btn btn-success" style="background-color:#d7b24e;border:1px solid #d7b24e;color:#fff;border-radius:0px;width:160px;">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </a>
                        
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



</div>
