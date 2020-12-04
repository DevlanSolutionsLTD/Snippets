<?php

session_start();

include_once("config.php");

if(isset($_POST['login']))

{

$email=$_POST['email'];

$password=$_POST['password'];

$ret= mysqli_query($con,"SELECT * FROM userregistration WHERE email='$email' and password='$password'");

$num=mysqli_fetch_array($ret);

$status=$num['status'];

if($num>0)

{	

if($status==0)

{

	$_SESSION['action1']="Verify  your Email Id by clicking  the link In your mailbox";

}

	else {



$_SESSION['login']=$email;

$_SESSION['id']=$num['id'];

$_SESSION['name']=$num['name'];

$extra="welcome.php";

$host=$_SERVER['HTTP_HOST'];

$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

header("location:http://$host$uri/$extra");

exit();

}

}

else

{

$_SESSION['action1']="Invalid username or password";

$extra="login.php";

$host  = $_SERVER['HTTP_HOST'];

$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

header("location:http://$host$uri/$extra");

exit();

}

}

 ?>

<!DOCTYPE html>

<html lang="en">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">

		<title>PHP GURUKUL | PHP Email Verification Script </title>

		<meta name="generator" content="Bootply" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!--[if lt IE 9]>

			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

		<![endif]-->

		<link href="css/styles.css" rel="stylesheet">

	</head>

	<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

	<div class="navbar-header">

        <a class="navbar-brand" rel="home" href="http://www.phpgurukul.com/">Home</a>

		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

		<span class="sr-only">Toggle navigation</span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		<span class="icon-bar"></span>

		</button>

	</div>

	<div class="collapse navbar-collapse">

		<ul class="nav navbar-nav">

			<li><a href="http://www.phpgurukul.com/all-demos/">All Demos</a></li>

			<li><a href="http://www.phpgurukul.com/category/php-projects/">Free Projects</a></li>

			<li><a href="http://www.phpgurukul.com/contact-us/">Contact</a></li>

			<li class="dropdown">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tutorials <b class="caret"></b></a>

              <ul class="dropdown-menu">

                <li><a href="http://www.phpgurukul.com/category/php/">PHP </a></li>

                <li><a href="http://www.phpgurukul.com/category/php-oops-concepts/">PHP OOPs</a></li>

                <li class="divider"></li>

                <li><a href="http://www.phpgurukul.com/category/php-data-object/">PDO</a></li>

                <li class="divider"></li>

                <li><a href="http://www.phpgurukul.com/category/inteview-ques-ans/">Interview QA</a></li>

              </ul>

            </li>

		</ul>

		

	</div>

</nav>



<div class="container-fluid">



  <div class="col-sm-6">

    <div class="row">

      <div class="col-xs-12">

        <h3>PHP Email Verification Script </h3>

		<hr >

		<form name="insert" action="" method="post">

     <table width="100%"  border="0">

     <tr>

    <td colspan="2"><font color="#FF0000"><?php echo $_SESSION['action1']; ?><?php echo $_SESSION['action1']="";?></font></td>

  </tr>

  <tr>

    <th height="62" scope="row">Email id </th>

    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required /></td>

  </tr>

  <tr>

    <th height="62" scope="row">Password </th>

    <td width="71%"><input type="password" name="password" id="password" value=""  class="form-control" required /></td>

  </tr>

 <tr>

    <th height="62" scope="row"></th>

    <td width="71%"><input type="submit" name="login" value="Submit" class="btn-group-sm" /> </td>

  </tr>

</table>

 </form>

      </div>

    </div>

    <hr>

        

   

  </div><!--/center-->

<!--/container-fluid-->

	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

	</body>

</html>