<div class="sidebar-menu">
<header class="logo">
<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>ADMIN</h1></span> 
<!--<img id="logo" src="" alt="Logo"/>--> 
</a> 
</header>
<div style="border-top:1px solid rgba(0, 0, 0)"></div>
<!--/down-->
	<div class="down">



<img style='height:230px;width:230px;' src="images/admin3.jpeg">
	
	
<a href="index.php"><span class=" name-caret">
<?php
if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	echo ucwords($name);
}


?>


</span></a>
<p>ARCHON</p>
<ul>
<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
<li><a class="tooltips" href="/online_grocery_shopping/index.php"><span>Back To Portal</span><i class="lnr lnr-cog"></i></a></li>
<li><a class="tooltips" href="logout.php"><span>Logout</span><i class="lnr lnr-power-switch"></i></a></li>
</ul>
</div>
<!--//down-->
<div class="menu">
<ul id="menu" >
<?php
if(isset($_SESSION['login']))
{
	?>
<li><a href="index.php"><span>Account Info</span></a></li>
<li><a href="additem.php"><span>Add New Items</span></a></li>
<li><a href="view_item_list.php"><span>View Items</span></a></li>
<li><a href="logout.php"><span>Logout</span></a></li>
<?php }else{ ?>
<li><a href="login.php"><i class="fa fa-tachometer"></i> <span>Login</span></a></li>
<?php } ?>
</ul>
</div>
</div>