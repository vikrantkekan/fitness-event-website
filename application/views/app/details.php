
<style>

img {
  max-width: 100%; }

.preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
  margin-top: 50px;
  background: #eee;
  padding: 3em;
  line-height: 1.5em; }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

.affix {
    top: 100px;
    z-index: 1 !important;
  }
</style>



<section class="container main-conatiner">



<br>



<div class="card">
      <div class="container-fliud">
         <span class="" style="color:#aeaeae9c !important;"><a href="#" style="color:#aeaeae9c !important;">Home</a> > 
<a style="color:#aeaeae9c !important;" href="https://<?php echo base_url();?>BuyBook/<?php echo $singlebook['pname'];?>/<?php echo $singlebook['id'];?>"><?php echo $singlebook['pname'];?></a>
</span>
        <div class="wrapper row">

          <div class="preview col-md-6">

           
            <div class="preview-pic tab-content">
              <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
              <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
            </div>
            <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
              <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
            </ul>
            
          </div>
          <div class="details col-md-6">
            <h3 class="product-title"><?php echo $singlebook['pname'];?></h3>
            <div class="rating">
              <div class="stars">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
              </div>
              <span class="review-no">41 reviews</span>
            </div>
            <p class="product-description"><?php echo $singlebook['short_desc'];?></p>

 <h4 class="price" >
          <span style="font-size:28px;font-weight:700;">₹<?php echo $singlebook['oprice'];?></span>&nbsp;&nbsp;
          <span style="font-size:18px;color:#9b9b9bc9;"><del>₹<?php echo $singlebook['mrp'];?></del></span>&nbsp;&nbsp;
          
          <?php
       //$disc=$singlebook['mrp']-$singlebook['oprice'];
      // $disc/$singlebook['oprice'];
       $disc1=  (float)$singlebook['mrp']-(float)$singlebook['oprice'];
    $disc2=round(((float)$disc1/(float)$singlebook['mrp'])*100,0);
     ?>
          
          <span style="font-size:18px;color:#0082ca;font-weight:500;text-transform: lowercase;"><?php echo $disc2;?>% off</span>
        </h4>


            <h5 class="colors">colors:
              <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
              <span class="color green"></span>
              <span class="color blue"></span>
            </h5>

            <div class="action">
              <a href="https://<?php echo base_url();?>add-to-cart/<?php echo $singlebook['pname'];?>/<?php echo $singlebook['mrp'];?>/<?php echo $singlebook['oprice'];?>/<?php echo $singlebook['id'];?>" class="add-to-cart btn btn-default" type="button">add to cart</a>

               <a href="https://<?php echo base_url();?>add-to-cart/<?php echo $singlebook['pname'];?>/<?php echo $singlebook['mrp'];?>/<?php echo $singlebook['oprice'];?>/<?php echo $singlebook['id'];?>" class="add-to-cart btn btn-success" type="button">Buy Now</a>
            </div>

          

          </div>
        </div>
      </div>
    </div>


<br>


  <!-- single-product-tab start -->
          <div class="single-pro-tab">
            <div class="row">
              <div class="col-md-3">
                
                <div class="single-pro-tab-menu nav-stacked" data-spy="affix" data-offset-top="500">
                  <!-- Nav tabs -->
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a data-toggle="pill" href="#description" >Description</a></li>
                     <li><a data-toggle="pill" href="#specification" >Specification</a></li>
                    <li><a data-toggle="pill" href="#box" >What's in the box ?</a></li>
                    <li><a data-toggle="pill" href="#use" >How to use</a></li>
                    <li><a data-toggle="pill" href="#refill" >Filter Refill</a></li>
                    <li><a data-toggle="pill" href="#reviews" class="active">Reviews</a></li>
                    
                  </ul>
                </div>

              </div>
              <div class="col-md-9">
                <!-- Tab panes -->
                <div class="tab-content">
                 

                 <div id="description" class="tab-pane fade in active" >
                    <div class="pro-tab-info pro-information">
                      <h3 class="tab-title title-border mb-30">Product Description</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>

                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      
                    </div>                      
                  </div>

                   <div id="specification" class="tab-pane fade in" >
                    <div class="pro-tab-info pro-information">
                      <h3 class="tab-title title-border mb-30">Product Specification</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>

                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    </div>                      
                  </div>

                   <div id="box" class="tab-pane fade in" >
                    <div class="pro-tab-info pro-information">
                      <h3 class="tab-title title-border mb-30">What's in the box ?</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>

                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    </div>                      
                  </div>

                   <div id="use" class="tab-pane fade in" >
                    <div class="pro-tab-info pro-information">
                      <h3 class="tab-title title-border mb-30">How to use</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>

                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    </div>                      
                  </div>

                   <div id="refill" class="tab-pane fade in" >
                    <div class="pro-tab-info pro-information">
                      <h3 class="tab-title title-border mb-30">Filter Refill</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>

                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                    </div>                      
                  </div>


                  <div id="reviews" class="" >
                    <div class="pro-tab-info pro-reviews">
                      <div class="customer-review mb-60">
                        <h3 class="tab-title title-border mb-30">Customer review</h3>
    

<?php

  foreach($reviews as $re){

?>
<div class="media">
    <div class="media-left">
      <img src="http://<?php echo base_url();?>images/profile.png" class="media-object" style="width:45px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?php echo ucfirst($re['name']);?> <small><i>Posted on <?php echo $re['todate'];?></i></small></h4>
       <p style="font-size:18px;color: #333;"><?php echo $re['subject'];?> </p>
      <p><?php echo $re['comment'];?></p>
      
      </div>
    </div>
<?php
  }
?>                      
                      
    
    
  



                      </div>
                      <div class="leave-review">
                        <h3 class="tab-title title-border mb-30">Leave your reviw</h3>
                        
                        <div class="reply-box">
                          <form action="https://<?php echo base_url();?>review" method="Post">

   <!--
<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

  --->
                          <br><br>
                            <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" name="name" class="form-control" id="usr">
</div>

                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
  <label for="pwd">Subject:</label>
  <input type="text" name="subject"  class="form-control" id="pwd">
</div> 
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" name="comment"  rows="5" id="comment"></textarea>
</div> 
                  <button type="submit" class="btn btn-md btn-success">Submit Review</button>

                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>    
                  </div>

                  
                 
                </div>                  
              </div>
            </div>
          </div>
          <!-- single-product-tab end -->



</section>

<br></br>


<div class="down_enquiry visible-xs dontdisplaylg" style="align-items: center;">
  <div class="" style="display:flex;">

<div style="width: 50%;border-right: 1px solid #fff;"> 

<!--
  <center>
  <a style="color: #fff !important;align-content: center;display:grid;margin-top:10px;" href="#" data-toggle="modal" data-target="#enquiry_model" class="popup-with-zoom-anim text-center"><i class="fas fa-bolt fa-lg"></i> &nbsp;&nbsp; BUY NOW </a></center>
--->
<button style="border-radius:0px;width: 100%;float:left;color:#fff !important;" type="button" class="text-center add-to-cart pulsate-fwd btn btn-primary" data-mdb-ripple-color="dark"> <i class="fas fa-bolt fa-lg"></i> &nbsp;&nbsp; BUY NOW </button>

</div>
      
<div style="width: 50%;border-left: 1px solid #fff;"> 


<button style="border-radius:0px;width: 100%;float:center;color:#fff !important;" type="button" class="text-center add-to-cart pulsate-fwd btn btn-success" data-mdb-ripple-color="dark"> <i class="fas fa-cart-arrow-down fa-lg"></i> &nbsp;&nbsp; ADD TO CART </button>
<!---
  <center>
  <a style="color: #fff !important;align-content: center;display:grid;margin-top:10px;" href="tel:+917420899111" class="text-center"><i class="icon-phone"></i>&nbsp;&nbsp;CALL NOW </a></center>
--->

</div>

</div>
</div>


