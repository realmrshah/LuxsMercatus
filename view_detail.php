<?php
require_once"dbconfig.php";
$result=select("select * from items where elecid='".$_REQUEST['id']."'")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>LUX  &amp; Mercatus | Listing</title>

    <!-- images -->
    <link rel="icon" href="img/core-img/images.jpg">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

    <!-- ***** Search Form Area ***** -->
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
					 <a class="navbar-brand" href="index.php">LUX Mercatus</a>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="mycart.php"></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php"></a>
                                </li>
                            </ul>
                            
                           
						       <div class="dorne-signin-btn">
							   <?php
							   if(isset($_SESSION['login']))
							   {
								   ?><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                              
								<a class="nav-link" href="mycart.php">My Cart</a>
								<a class="nav-link" href="mycart.php">Category</a>
                              
                                	<a class="nav-link" href="logout.php">Logout</a>
								   
								   <?php
							   }
								   else
								   {
									   ?>
									   <a href="ragister.php">Sign in or Register</a>
								<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
								
								   <?php
								   }
							   
							   ?>
                                
                            </div>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/banner.jpg)"></div>
	</br>
    <div class="row">
        <div class="col-lg-1 text-center"></div>
        <div class="col-lg-10 text-center">
		
  <p style="background-color:limegreen;color:white;font-size:35px;">Product Details<p>
</div>
	   
      </div><?php
	  while($r=mysqli_fetch_array($result))
	  {
		  extract($r);
	  ?>
	  <div class="row">
	  <div class="col-lg-1"></div>
	  <div class="col-lg-10">
<div class="card text-left">
  <div class="card-header" style="font-size:30px">
    <?=ucwords($Title)?>
  </div>
  <ul class="list-group list-group-flush">
        <li class="list-group-item">Price - Rs.<?=$price?>/-</li>
  </ul>
  
  <div class="card-body">
  <img src="admin/images/<?=$image?>" style="height:400px;max-width:95%;border:2px;">
    <br><h5 class="card-title">Description: <br><?=ucwords($discription)?></h5><br>
	<form method="post">
	<?php
	if(isset($_SESSION['login']))
{
?>	    <button name="cart" class="btn btn-success">Add To Cart</button>
</div>
  <input type="hidden" name="bookid" value=<?=$elecid?>>
 <input type="hidden" name="userid" value=<?=$_SESSION['userid']?>>
 <div class="card-footer text-muted">
 
 <?php
}
else
{
?><a href="ragister.php" class="btn btn-success">Add To Cart</a>
	   
<?php	
}
?>
       <a href="index.php" class="btn btn-success">Continue shopping</a>
     
  </div>
  </form>
  <?php
	  
	  if(isset($_REQUEST['cart']))
	  {
		 extract($_REQUEST);
		$query= "INSERT INTO `cart`( `elecid`, `userid`) VALUES ('$bookid','$userid')";
		$n=iud($query);
	 if($n==1)
	{
		echo"<script>alert('Successful');
		 </script>";
	}
	else
	{
	echo"<script>alert('Something Went Wrong!');
		 
		 </script>";
	
	}
	}
	  
	  ?>
</div>	  
	  
	  </div></div><?php
	  }
	  ?>
	<footer class="dorne-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                         Copyright &copy; <script>document.write(new Date().getFullYear());</script> Contact Us: +917204873414 | This template is made  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://instagram.com/_.hedonist._" target="_blank">Lucifiuer </a>  
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>