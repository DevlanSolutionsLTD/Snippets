
<?php
include 'config.php';
if(!empty($_GET['code']) && isset($_GET['code']))
{
$code=$_GET['code'];
$sql=mysqli_query($con,"SELECT * FROM userregistration WHERE activationcode='$code'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
  
$st=0;
$result =mysqli_query($con,"SELECT id FROM userregistration WHERE activationcode='$code' and status='$st'");
$result4=mysqli_fetch_array($result);   

if($result4>0) 
  {
$st=1;
$result1=mysqli_query($con,"UPDATE userregistration SET status='$st' WHERE activationcode='$code'");
$msg="Your account is activated"; 
}
else
{
$msg ="Your account is already active, no need to activate again";
}
}
else
{
$msg ="Wrong activation code.";
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
  
  <!--left-->
 <div class="col-sm-2">
     
    	<div class="panel panel-default">
         	<div class="panel-body"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- fordemos -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="9236995934"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
        </div>
       
        <hr>
		 </div>
      
     
 <!--/left-->
  
  <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>PHP Email Verification Script </h3>
		<hr >
	<p><?php echo htmlentities($msg); ?></p>
   <p> Now you can login</p>
   <p>For login <a href="login.php">Click Here</a></p>
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- newone21 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="6355325537"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
      </div>
    </div>
    <hr>
        
   
  </div><!--/center-->

  <!--right-->
  <div class="col-sm-4">
  
    	<div class="panel panel-default">
         	
         	<div class="panel-body" align="center"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sidebar -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="3231684736"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></div>
        </div>
    
      
     
  </div>
<!--/right-->
  <hr>
</div><!--/container-fluid-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>