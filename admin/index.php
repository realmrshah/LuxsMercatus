<?php require_once"dbconfig.php";
if(isset($_SESSION['login']))
{
	
}
else
{
	header("location:login.php");
}

?>
<!DOCTYPE HTML>
<php>
<?php include"head.php";?> 
<body>
<div class="page-container">
<div class="left-content">
<div class="inner-content">
<?php //include"header.php";?>
<div class="outter-wp">
<div class="sub-heard-part">
<ol class="breadcrumb m-b-0">
<li><a href="index.php">Home</a></li>
<li class="active">Admin Page</li>
</ol>
</div>
<div class="graph-visual tables-main">
<h2 class="inner-title">Admin Page</h2>
<div class="graph">
<div class="block-page">
<p>Welcome

<?php
if(isset($_SESSION['name']))
{
	$name=$_SESSION['name'];
	echo"$name";
}

?>
</p>
</div>

</div>
<p>HEAD OFFICE- 080 2542xxxx


<p>PARTNERS CONTACTS
<p>NORTH BANGALORE HEAD: 
	<p>REESE- +91 987654xxxx
<p>SOUTH BANGALORE HEAD: 
	<p>FINCH- +91 765432xxxx
<p>CENTRAL BANGALORE HEAD: 
	<p>DAN- +91 876543xxxx
<p>EAST BANGALORE HEAD: 
	<p>TRIXIE- +91 654321xxxx
<p>WEST BANGALORE HEAD: 
	<p>KINLEY- +91 543216xxxx

</div>
</div>
<?php include"footer.php"?>
</div>
</div>
<?php include"side_bar.php";?>
</div>
<?php include"footer_script.php";?>
</body>
</html>
