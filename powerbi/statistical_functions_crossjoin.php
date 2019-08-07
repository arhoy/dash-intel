<?php include "includes/header0.php"; ?>
  
  <title>Cross Join in Power BI | Dash-Intel</title>
<meta name="title" content= "Cross Join function in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Cross Join in Power BI | Dash-Intel"/>
<meta name="description" content= "Cross Join returns a table which contains a cartesian product from two or more columns.">
   
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
      
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
                <h4 class = custom_h4> Statistical Functions</h4><br>
                <h5><em>Cross Join</em> function</h5>
                <p><em>CROSSJOIN</em> is used to return a table that contains the Cartesian product from the rows of another table. The same effect can be achieved by simply dragging the desired column into the rows and columns of a table visualization.
                </p>
                
                <h6>Syntax:</h6>
                <div class="syntax">
                <p>CROSSJOIN(table,table,[,table])</p>
                </div>
                
              <h6>Example Formula:</h6>
              <p>In the Power BI formula bar write:</p>
               <pre class="brush:dax; title: ; notranslate" title="">
                  
                crossjoin_tables = CROSSJOIN(BusinessTable,AdTable)   
                   
	            </pre><br>
              
               <h6>Power BI Demo:</h6>
               <p>Cross Join the AdTable and BusinessTable</p>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
               <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZmM3OTVmYjctNDk0MC00ZGYzLWE4YzctYmYzNTRhNmJjYWMzIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
                </div>
                <figcaption class = "custom_figcaption">
                </figcaption>
               </figure>
               <p>The demo shows crossjoin returning a table with both all rows from the Ad Source table and all rows from the Business Type table. </p>
               
            
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
