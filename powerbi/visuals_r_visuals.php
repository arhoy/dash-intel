<?php include "includes/header0.php"; ?>
  
  <title>R Visuals in Power Bi | Dash-Intel</title>
<meta name="title" content= "Power BI R Visuals | Dash-Intel" />
<meta name="metatitle" content= "R Visuals in Power BI | Dash-Intel"/>
<meta name="description" content= "R Visuals in Power BI let you combine R software with Power BI visuals to analyze statistical data. A correlation matrix is an example of an R visual given a visual representation of how each variable is linearly correlated.">
   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include_once("../includes/utils/analyticstracking.php") ?>
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: R-Visuals </h2>
                <h4 class = custom_h4> The Basics: R-Visuals </h4>
                
                    <p>
                         Power BI also lets you make power visualization in R. R is a widely used statistical computing language which can be downloaded
                          <a href="https://www.r-project.org/" target = "_blank">here</a> A common type of plot used in R is a graphical display of a correlation matrix. A correlation matrix is a visual representation of how each variable is linearly related. Essentially you have a matrix ( a table of values with rows and columns) where each cell corresponds to how well each of the variables correlate.The graph below illustrates this concept using NHL hockey data:
                     </p>
                      <br>

                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="853" height="480" src="images\correlations.png" frameborder="0" allowfullscreen>
                            </iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-a: Correlation matrix for all players in NHL 2015/2016 Season
                        </figcaption>
                      </figure>   

                      <p>
                        This correlation matrix shows how well player points, age, misses, major penalties, assists, goals and salary are linearly related to each other. The diagonal on the matrix will always be a perfect 1-1 linear correlation since points will be perfectly correlated with points, age will be perfectly correlated with age and so on. The darker the shade of blue the stronger the positive correlation. We can see (not suprisingly), that points have a strong positive correlation with assists and with goals. That is if points go up and so do goals! Goals scored and salary have a roughly moderate correlation while salary and major penalties have no correlation whatsoever. 
                      </p>
                      <br>
            <h5>How to make the r visual above:</h5>
                      
                <p> In Power BI in your R script visual enter the following lines of code:</p>
                   <pre class="brush:dax; title: ; notranslate" title="">
                      
                    require &#40;&#34; corrplot&#34; &#41; 
                    library &#40;corrplot&#41;   
                    M &lt;&ndash;cor&#40;dataset)  
                    corrplot &#40;M, method = &#34; color&#34; , tl.cex = 1.5, tl.srt = 100, tl.col= "black"&#41;  
                    #corrplot &#40;M, method = &#34; circle&#34; , type = "upper", tl.cex = 1.5, tl.srt =100, t.col = &#34; black&#34; &#41;  
                    #corrplot &#40;M, method = &#34; circle&#34; , tl.cex = 1.5, tl.srt =100, tl.col =&#34; black&#34; , type = &#34; upper&#34; , order =&#34; hclust&#34; &#41; 
                    
	               </pre> 		
	               <p><a href="files/nhl 2015 2016 data.csv">Download the data set</a></p>		 
	
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
