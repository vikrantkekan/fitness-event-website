<!DOCTYPE html>
<?php
//echo $title;

$todate=date('d/m/Y');

$fimg1=$singlebook['f_img'];

     if (strpos($fimg1, 'http') !== false) {
   	 $fimg=$fimg1;
		}else{
		$fimg='https://booktree.co.in/'.$fimg1;
			}
?>

<html lang="en">
<head>
  
  <title><?php echo $singlebook['pname'];?> Book: BookTree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<meta name = "keywords" content = "<?php echo $singlebook['pname'];?> Book,Buy <?php echo $singlebook['pname'];?>,Price of <?php echo $singlebook['pname'];?>,<?php echo $singlebook['author'];?>,<?php echo $singlebook['endcat'];?> Books,<?php echo $singlebook['publication'];?>,
<?php echo $singlebook['language'];?> Books,Indian Books,
free books,discounted books," />
<meta name = "description" content = "<?php echo $singlebook['pname']; ?> Book By <?php echo $singlebook['author'];?>" />
<meta name = "revised" content = "BookTree, <?php echo $todate;?>" />
<meta name = "author" content = "Vikrant Kekan" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta property="og:url" content="https://www.booktree.co.in/deep/book/<?php echo $title;?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $singlebook['pname']; ?>" />
<meta property="og:description" content="<?php echo $singlebook['short_desc']; ?>"  />
<meta property="og:image" content="<?php echo $fimg; ?>" />
<meta property="og:image:width" content="100" />
<meta property="og:image:height" content="100" />

<meta property="fb:app_id" content="3319877348077790">


</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-8">
			<p>Book Title: <?php echo $singlebook['pname'];?></p>	
	<p>Book Author: <?php echo $singlebook['author'];?></p>	
	<p>Book Publication: <?php echo $singlebook['publication'];?></p>
		<p>Book ISBN: <?php echo $singlebook['isbn'];?></p>
	<p>Book Price: <del><?php echo $singlebook['mrp'];?></del></p>
	<p>Offer Price: <?php echo $singlebook['oprice'];?></p>
	<p>Short Description: <?php echo $singlebook['short_desc'];?></p>
<div>
  <a href="https://booktree.co.in"><h1>Buy Now</h1></a>
</div>
			</div>
		</div>
		</div>



</body>
</html>
