<?php include "includes/header0.php"; ?>
  
<title>Aggregate Functions | Power BI</title>
<meta name="title" content= "Aggregate Functions in Power Bi | Dash-Intel" />
<meta name="metatitle" content= "Aggregate Functions | Dash-Intel" />
<meta name="description" content="Aggregate Functions summary in Power BI.">

   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "includes/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
        
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI - Aggregate Functions</h2>
             <h4 class = custom_h4>Aggregating and Counting Values</h4>
                
                  <p> 
                      Aggregate functions work with numeric data in Power BI to sum or average data values. We can have aggregate functions for a single column or aggregate rows in multiple columns: 
                  </p>
                    
                  <h5>For a single column use:</h5><br>
                    
            <table class="table table-hover table-bordered">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <thead class = "custom_thead">
                            <tr>
                            <th>SUM</th>
                            <th>AVG</th>
                            <th>MIN</th>
                            <th>MAX</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Sums all values in a single column</td>
                              <td>Averages all values in a single column</td>
                              <td>Finds minimum value in a single column</td>
                              <td>Finds maximum value in a single column</td>
                            </tr>
                          </tbody>
                        </table> <hr>
                        
                  <h5>For multiple columns use:</h5> <br>
                     
                     <table class="table table-hover table-bordered">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <thead class = "custom_thead">
                            <tr>
                            <th>SUMX</th>
                            <th>AVGX</th>
                            <th>MINX</th>
                            <th>MAXX</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Sums all values in multiple columns</td>
                              <td>Averages all values in multiple columns</td>
                              <td>Finds minimum value in multiple columns</td>
                              <td>Finds maximum value in multiple columns</td>
                            </tr>
                          </tbody>
                        </table>
                        <hr>
                        
                    <h5>Counting:</h5><br>
                     
                    <p>Below gives a reference for several counting functions available in POWER BI</p>
                     
                          <table class="table table-hover table-bordered">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <thead  class = "custom_thead">
                            <tr>
                            <th>COUNTROWS</th>
                            <th>COUNT</th>
                            <th>COUNTA</th>
                            <th>COUNTBLANK</th>
                            <th>COUNTDISTINCT</th>
                             
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>counts number of rows in a table</td>
                              <td>counts numeric rows only in a table</td>
                              <td>counts non empty rows in a table</td>
                              <td>counts blank rows in a table</td>
                              <td>counts distinct rows in a table</td>
                            </tr>
                          </tbody>
                        </table>
                         <hr>

                      <br>
                       <br>
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
