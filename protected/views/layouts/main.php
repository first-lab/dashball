<?php /* @var $this Controller */ ?>
 <?php Yii::app()->bootstrap->registerAllCss(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<title>Bolaboli.net</title>
</head>
<body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<div class="container">
<div class="row-fluid">
  <div class="span9"><h1>Bolaboli.net</h1></div>
</div>
<div class="row-fluid">
  <div class="span12">
	<ul class="nav nav-tabs">
	  <li class="active">
	    <a href="#">Home</a>
	  </li>
	  <li><a href="#">Manchester City</a></li>
	  <li><a href="#">Premier League</a></li>
	  <li><a href="#">Europe Cup</a></li>
	  <li><a href="#">Edin Dzeko</a></li>
	  <li><a href="#">Add My Favourite...</a></li>
	</ul>
  </div>
</div>
<div class="row-fluid">
  <div class="span2">
  	<ul class="nav nav-pills nav-stacked">
      <li><a href="#">Schedules</a></li>
      <li><a href="#">Table</a></li>
      <li><a href="#">Records</a></li>
      <li><a href="#">News & Rumours</a></li>
	</ul>
  </div>
  <div class="span9">
	<?php echo $content; ?>
  </div>
</div>




	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
