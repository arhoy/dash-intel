

<?php include "includes/header.php"; ?>
<?php include "includes/css.php"; ?>
<?php

$status=$_SERVER['REDIRECT_STATUS'];
$codes=array(
      400 => array('400 Bad Request', 'The request cannot be fulfilled due to bad syntax.'),
      401 => array('401 Login Error', 'It appears that the password and/or user-name you entered was incorrect.'),
      403 => array('403 Forbidden', 'Sorry, employees and staff only.'),
      404 => array('404 Missing', 'We\'re sorry, but the page you\'re looking for is missing, hiding, or maybe it moved somewhere else and forgot to tell you.'),
      405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
      408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
      414 => array('414 URL To Long', 'The URL you entered is longer than the maximum length.'),
      500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
      502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
      504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$errortitle=$codes[$status][0];
$message=$codes[$status][1];

if($errortitle==false){
       $errortitle="Unknown Error";
       $message="An unknown error has occurred.";
}

?>
<!doctype html>
<html>
<head>
<title><?php echo("$errortitle");?></title>
<meta charset="utf-8">
</head>
<body>

<!-- Insert headers here. -->
<?php include_once("includes/analyticstracking.php") ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "includes/headmenu.php"; ?>

<div class="container-fluid">
 <div class="row">
    <div class="col-md-12">


      
      
            <div class="page404__titlebox">
                <h1 class = "page404__title">Oh no, it looks like we have a 
                    <span class = "page404__title-primary"><?php echo($errortitle);?></span> 
                    <span class = "page404__title-secondary"><?php echo($message);?></span> 
                </h1>
            </div>

    
  
  
    </div>
 </div>
</div>
  

<!-- Insert footers here. -->
<footer class ="container">
    <hr>
   <div class="row">
   <div class="col-sm-3">
       <h5>Power Bi</h5>
       <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-blue animate__link" href="powerbi/" target = "_blank">Basics</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-blue animate__link" href="powerbi/visuals_bar+column_graph.php" target = "_blank">Visuals</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-blue animate__link" href="powerbi/modeling_joining_tables.php" target = "_blank">Modeling</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-blue animate__link" href="powerbi/modeling_date_functions.php" target = "_blank">Date functions</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-blue animate__link" href="powerbi/modeling_calendar.php" target = "_blank">Date Tables</a></li>
                
   </div>
   <div class="col-sm-3">
       <h5>Tableau</h5>
       <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-green animate__link" href="tableau/" target = "_blank">Get Started</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-green animate__link" href="tableau/date_calculations_tableau.php" target = "_blank">Date Calculations</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-green animate__link" href="tableau/stats_calculations_tableau.php" target = "_blank">Stats Calculations</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-green animate__link" href="tableau/lod_expressions_menu_tableau.php" target = "_blank">LOD Expressions</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-green animate__link" href="tableau/creating_set_tableau.php" target = "_blank">Tableau Sets</a></li>
                
   </div>

  <div class="col-sm-3">
       <h5>Javascript</h5>
       <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-purple animate__link" href="js/" target = "_blank">What is javascript</a></li>
       <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-purple animate__link" href="js/js_intro.php" target = "_blank">Intro to javascript</a></li>
      <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-purple animate__link" href="js/js_es6_basics.php" target = "_blank">Intro to ES6 javascript</a></li>
             
   </div>
       

   <div class="col-sm-3">
       <h5>Website Portfolio</h5>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-orange animate__link" href="js/js_project_examples/cryptoCall/" target = "_blank">Cryptocall</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-orange animate__link" href="js/js_project_examples/insurify/" target = "_blank">Insurify</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-orange animate__link" href="js/js_project_examples/nameBook/" target = "_blank">Namebook</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-orange animate__link" href="js/js_project_examples/yegDrives/" target = "_blank">YEG Drives</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-orange animate__link" href="http://www.drinktopia.club/" target = "_blank">Drinktopia</a></li>
   <li class = "mainpage__item"><a class= "mainpage__link mainpage__link-orange animate__link" href="http://www.recipeapp.club/" target = "_blank">Recipe App</a></li>
   </div>
 </div>
  <div class="row">
      <div class="col-sm-12 about">
          <hr>
            <p>Dash-Intel is a site for learning and teaching simple data analytics techniques. 
            It gives a reviews and tutorials and different business dashboards that can be incorporated into company of any size, whether that is a small business or large corporation. 
            Tutorial, references, examples and articles are being updated and expanded to provide a for a great online learning resource on dashboards and all things web related. 
            For questions, please contact admin@dash-intel.com
            </p>
            <p>
            <span>Copyright 2018</span> Dash-intel.com | <a href="termsandconditions.php">Terms</a> | All rights reserved.
            </p>
        
        </div>
  </div>

</footer>
</body>
</html>