<?php include "includes/header0.php"; ?>
   
<title>Geomean in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Geomean Functions | Dash-Intel" />
<meta name="metatitle" content= "Using geomean functions in Power BI | Dash-Intel"/>
<meta name="description" content= "The geomean function returns the geometric mean. This is calculated by multiplying all values together then taking the nth root.">   

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
                <h5><em>GEOMEAN</em> functions</h5>
                <p>The <em>geomean</em> functions returns the geometric mean. The geometric mean is calculated by multiplying all the values in a column and then taking the nth root of the product of n numbers. It is often used to find the average growth rates of a population or in finance the calculate in average interest rate over time.
                
                <p>There are two types of geometric mean functions.</p>
                <ul>
                    <li>GEOMEAN(column)</li>
                    <li>GEOMEANX(table,expression)</li>
                </ul>
                 
                <h5>GEOMEAN</h5>
                <h6>Example:</h6>
                <p>Find the geometric mean for the world growth rate:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                 pop_geomean = GEOMEAN('world population growth'[growth rate])
	            </pre>
	            
	            <h5>GEOMEANX</h5>
	            <p>Use when you want to find the geometric mean of an expression</p>
                <h6>Example:</h6> 
	           <p>Find the geometric mean for the inflation rate.</p>
	           <pre class="brush:dax; title: ; notranslate" title="">
                    Geomean_x = GEOMEANX('inflation rate', 1 + 'inflation rate'[Inflation rate])
	           </pre>
               <p><em>GEOMEANX</em> is used to evaluate an expression over a table. In this case the expression is simply 1 + inflation rate. 1 is added onto the inflation rate, since the inflation rate is 0% in several years, which would incorrectly result in a geometric mean of zero.</p>
	            
	            <h6>Power BI Demo:</h6>
	            <p>The functions used above are plotted in Power BI to compare</p>
	             <figure class = "custom_graph_figures">        
                <div class="video-container">
           
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiOGE3YjhmYmUtYTc5Ni00YjU3LTllN2ItOWE4ZmU5MGJjODAwIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure>
               

        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
