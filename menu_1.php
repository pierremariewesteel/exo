<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<title>fdj</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
     <link href="css/style.css" rel="stylesheet">
         <script src="js/jquery.js"></script>
     <script src="js/bootstrap.js"></script>

<link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shCoreDefault.min.css" />
<link type="text/css" rel="stylesheet" href="syntaxhighlighter/styles/shThemejqPlot.min.css" />
<link rel="stylesheet" type="text/css" href="jqplot.css" />


<script type="text/javascript" src="jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="jqplot/jqplot.barRenderer.min.js"></script>
<script type="text/javascript" src="jqplot/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="jqplot/jqplot.categoryAxisRenderer.min.js"></script>
<script type="text/javascript" src="jqplot/jqplot.pointLabels.min.js"></script>
<link rel="stylesheet" type="text/css" href="jqplot/jquery.jqplot.min.css" />

    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php 
//menu_1.php

include 'Utilisateur.php';

		
$user=new Utilisateur(1);
?>
<nav class="" id="entete">
<a class="" href="#"><img src='images/logo.png' alt='logo' ID='logo'/></a>
      <span class="navbar-form navbar-right" role="search">
        <div class="form-group">
	        <div class="panneau_utilisateur mon_compte">
	        <img class="photo_id img-circle" src="images/<?php echo $user->getPhoto();?>"/>
	          <?php echo ucfirst(substr($user->getPrenom(),0,1)).'.'.ucfirst($user->getNom());?>
	        </div>
	        <div class="panneau_utilisateur mon_compte"><span class="glyphicon glyphicon-cog"></span> Mon compte</div>
	        <div class="panneau_utilisateur mon_compte"><span class="glyphicon glyphicon-cog"></span> Déconnexion</div>
        </div>
       
      </span>
</nav>

<nav id="entete2">
  	<h3>
  	<ul>
  	<a href="" type="image" class="menu_1">MOI</a>
	<a href="" class="menu_1">L'EQUIPE</a>
	<a href="" class="menu_1">MES CYCLISTES</a>
  	</ul>
	
	</h3>
</nav>

<nav class="navbar navbar-default" id="sous-entete">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="menu_2"><a href="#" >NEWS <span class="sr-only">(current)</span></a></li>
        <li class="active menu2"><a href="#" >ACTIVITES</a></li>
        <li class="menu_2"><a href="#">CALENDRIER</a></li>
      	<li class="menu_2"><a href="#">PALMARES</a></li>
      	<li class="menu_2"><a href="#">MEMBRES</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>
  </div><!-- /.container-fluid -->
</nav>
