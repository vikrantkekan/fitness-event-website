

<section class="container-fluid main-conatiner" style="padding-top:60px;">


<?php
foreach($cards as $car){

	if(count($car['books'])>2){
?>
<!---card set-1-->
<br>
<div class="row shadow-2 card-row1">
<div style="padding-bottom:15px;">
<span class="card-title-cat text-start"><?php echo $car['name'];?> </span>
<a href="https://<?php echo base_url();?>Online/Books/<?php echo $car['name'];?>/<?php echo $car['id'];?>" type="button" class="see-more pulsate-fwd btn btn-outline-info" data-mdb-ripple-color="dark">View More</a>
</div>

<?php

foreach($car['books'] as $bk){

?>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<a href="https://<?php echo base_url();?>BuyBook/<?php echo $bk['bname'];?>/<?php echo $bk['pid'];?>">
<div class="card mb-3 shadow-drop-top">
  <div class="row g-0"> 
    <div class="col-4 p-md-1">
      <img src="<?php echo $bk['img'];?>" alt="<?php echo $bk['bname'];?>" class=" img-fluid rounded-start" />
    </div>
    <div class="col-8">
      <div class="card-body">
        <h5 class="card-title" style="padding-top:5px;"><?php echo $bk['bname'];?></h5>
        <p class="card-text2">
        By <?php echo substr($bk['author'],0,25);?><br>
          <?php echo $bk['publication'];?>
        </p>
        
		<p class="card-text" style="position:absolute;bottom:35px;">
          <span style="font-size:24px;font-weight:700;">₹<?php echo $bk['price'];?></span>&nbsp;&nbsp;
          <span style="font-size:18px;color:#9b9b9bc9;"><del>₹<?php echo $bk['mrp'];?></del></span>&nbsp;&nbsp;
           <span style="font-size:15px;color:#0082ca;font-weight:500;"><?php
           
		  // $disc=$bk['mrp']-$bk['price'];
		   //$disc/$bk['price'];
		   $disc1=	(float)$bk['mrp']-(float)$bk['price'];
		$disc2=round(((float)$disc1/(float)$bk['mrp'])*100,0);
		 ?>  
		   <?php echo $disc2;?>% off</span>
        </p>
		
        <div class="mx-auto text-center" style="position:absolute;bottom:5px;">
<button style="float:center;color:#00b74a !important;font-size:12px;padding:7px 15px;" type="button" class="text-center add-to-cart pulsate-fwd btn btn-outline-success" data-mdb-ripple-color="dark"> <i class="fas fa-cart-arrow-down fa-lg"></i> &nbsp;&nbsp; ADD TO CART </button>

</div>


      </div>
    </div>
  </div>
</div>
</a>
</div>
<?php
}
?>

</div>
<!---end card set-1-->

<?php
	}
}
?>

<!---card set-1--->
<br>
<div class="row shadow-2 card-row2" >

<div style="padding-bottom:15px;">
<span class="card-title-cat text-start">Category</span>

<button type="button" class="see-more pulsate-fwd btn btn-outline-info" data-mdb-ripple-color="dark">View More</button>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<a href="">
<div class="card mb-3 shadow-drop-top">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2020/06/vertical.webp" alt="Trendy Pants and Shoes"class="img-fluid rounded-start" />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
</div>
</a>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<a href="">
<div class="card mb-3 shadow-drop-top">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2020/06/vertical.webp" alt="Trendy Pants and Shoes"class="img-fluid rounded-start" />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
</div>
</a>
</div>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<a href="">
<div class="card mb-3 shadow-drop-top">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="https://mdbcdn.b-cdn.net/wp-content/uploads/2020/06/vertical.webp" alt="Trendy Pants and Shoes"class="img-fluid rounded-start" />
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">
          This is a wider card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
</div>
</a>
</div>
</div>
<!---end card set-1-->



</section>


<br></br>

