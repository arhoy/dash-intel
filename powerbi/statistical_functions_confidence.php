<?php include "includes/header0.php"; ?>
   
<title>Confidence Functions in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Confidence Functions | Dash-Intel" />
<meta name="metatitle" content= "Using the confidence function in Power BI | Dash-Intel"/>
<meta name="description" content= "Confidence functions in Power BI allow you to compute confidence intervals around the mean.">


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
                <h5><em>CONFIDENCE</em> functions</h5>
                <p>
                Confidence functions in DAX are used to help compute confidence intervals about the average value called the <em>sample mean</em>. The value that gets returned is the margin of error (<em>ME </em>) defined as:
                </p>
                <div class="latex">
                     $ME = {CV \sigma \over \sqrt{n}}.$
                    
                </div><br>
                
                <p><em>CV </em> stands for the <em>critical value</em>  which is determined based on the significance level <em>alpha</em> that you specify.</p>
                
                <p>For a 95% confidence interval, alpha is set to 0.05</p>
                <p>
                    There are two types of CONFIDENCE functions in DAX. The first, <em>CONFIDENCE.NORM(alpha,standard_dev,size)</em> returns the calculation of the margin of error for the normal distribution.
                    The second, returns the margin of error for the student's T distribution:
                </p>
                
         
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                  Margin of error = CONFIDENCE.NORM(0.05,10,30)
                
	            </pre>
	            <p>This returns a value of 3.58</p>
              
               <pre class="brush:dax; title: ; notranslate" title="">
                  Margin of Error = CONFIDENCE.T(0.05,10,30)
                 
	            </pre>
	            <p>This returns a value of 3.73</p>
	            
	            <p>
	            When used with the sample mean, $\bar{x}$, one can specifiy a range of values the true population mean, $\mu$ falls within.
	            </p>
	            <p>For example suppose the sample mean, $\bar{x}$ has a value of 20. Using the margin error above our confidence interval becomes:
	            </p>
	            <div class="latex">
	                <ul>
                    <li>
                        $\bar{x} \pm ME$   (formula for calculating confidence interval)
                    </li>
                    <li>$ => 20 \pm 3.58$ </li>
                    <li> $ => (16.42,23.58)$</li>
	                    
	                </ul>
	                    
	                    
	                   
	                
	                
	                
	            </div>
	            <p>Using the normal approximation, the true population value is between 16.42 and 23.58 19 times out of 20. (ie. 95% of the time).
	            </p>
	            <p>A Student's T distribution always returns a slightly higher value then the normal distribution and has slightly "fatter tails" which result in a slight higher probability that extreme values will be observed.
	            When you have a large sample size, the two distributions converge. This means the confidence intervals will be the approximately the same.
	             </p>
        
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
