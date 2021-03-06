<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AdoptUrFreelancer</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link href="css/monstyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Navigation -->
<nav class="[ navbar navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
        <div class="[ container ]">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="[ navbar-header ]">
                <button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="[ sr-only ]">Toggle navigation</span>
                    <span class="[ icon-bar ]"></span>
                    <span class="[ icon-bar ]"></span>
                    <span class="[ icon-bar ]"></span>
                </button>
                <div class="[ animbrand ]">
                    <a class="[ navbar-brand ][ animate ]" href="C:/Users/Benji/Projets/AdoptUrFreelancer/index.html">AdopteUrFreelancer</a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="[ collapse navbar-collapse ]" id="bs-example-navbar-collapse-1">
                <ul class="[ nav navbar-nav navbar-right ]">
                    <li class="[ visible-xs ]">
                        <form action="http://bootsnipp.com/search" method="GET" role="search">
                            <div class="[ input-group ]">
                                <input type="text" class="[ form-control ]" name="q" placeholder="Rechercher un projet ou un freelancer">
                                <span class="[ input-group-btn ]">
                                    <button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
                                    <button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
                                </span>
                            </div>
                        </form>
                    </li>
                    <li><a href="#" class="[ animate ]">About</a></li>
                    <li>
                        <a href="C:/Users/Benji/Projets/AdoptUrFreelancer/freelancer.php" class="[ animate ]">Freelancer</span></a>
                          <!--<ul class="[ dropdown-menu ]" role="menu">
                            <li><a href="#" class="[ animate ]">Blog <span class="[ pull-right glyphicon glyphicon-pencil ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">List of resources <span class="[ pull-right glyphicon glyphicon-align-justify ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">Download Bootstrap <span class="[ pull-right glyphicon glyphicon-cloud-download ]"></span></a></li>
                            <li class="[ dropdown-header ]">Bootstrap Templates</li>
                            <li><a href="#" class="[ animate ]">Browse Templates <span class="[ pull-right glyphicon glyphicon-shopping-cart ]"></span></a></li>
                            <li class="[ dropdown-header ]">Builders</li>
                            <li><a href="#" class="[ animate ]">Form Builder <span class="[ pull-right glyphicon glyphicon-tasks ]"></span></a></li>
                            <li><a href="#" class="[ animate ]">Button Builder <span class="[ pull-right glyphicon glyphicon-edit ]"></span></a></li>
                        </ul>-->
                    </li>
                    
                    <li><a class="animate" href="#Freelancer?">Client</a></li>
                    <li><a class="animate" href="#login">Login</a></li>
                    <li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="[ bootsnipp-search animate ]">
            <div class="[ container ]">
                <form action="http://bootsnipp.com/search" method="GET" role="search">
                    <div class="[ input-group ]">
                        <input type="text" class="[ form-control ]" name="q" placeholder="Recherchez un projet ou un freelancer">
                        <span class="[ input-group-btn ]">
                            <button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </nav>
<br><br><br><br><br><br>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend style="text-align:center;border-top: 1px solid rgb(95, 176, 228);border-bottom: 1px solid rgb(95, 176, 228);" class="legendform">Inscription freelancer</legend>

<!-- Text input--><br><br><br>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">* Nom et prénom :</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="ex: Cabassot Benjamin" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">* Mot de passe :</label>
  <div class="col-md-4">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="********" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mail">* Adresse mail :</label>  
  <div class="col-md-4">
  <input id="mail" name="mail" type="text" placeholder="ex: benjamin.cabassot@edu.esiee.fr" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tel">* Téléphone :</label>  
  <div class="col-md-4">
  <input id="tel" name="tel" type="text" placeholder="0679757579" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectmultiple">* Compétence :</label>
  <div class="col-md-4">
    <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
      <option value="1">Web Developper</option>
      <option value="2">Data scientist</option>
      <option value="3">Web design</option>
      <option value="4">Community manager</option>
      <option value="5">Web marcketing</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description :</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description">Décrivez vous et vos projets succinctement.</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bt1"></label>
  <div class="col-md-4">
    <button id="bt1" name="bt1" class="btn btn-primary" style="display: block;
   margin : auto;">Valider</button>
  </div>
</div>








<br><br><br>



    <footer>
       <div class="container">

   
        <div class="text-center center-block">
            <p class="txt-railway">- AdoptUrFreelancer -</p>
            <br />
                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social"></i></a>
                <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social"></i></a>
                <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social"></i></a>
                <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social"></i></a>
</div>
    <hr />
</div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>