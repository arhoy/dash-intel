<?php include "includes/header0.php"; ?>
  
<title>Poisson Function in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Poisson Function | Dash-Intel" />
<meta name="metatitle" content= "Using the poisson function in Power BI | Dash-Intel"/>
<meta name="description" content= "Returns the poisson probability or poisson cummulative probability depending on whether cummulative is set to true or false.">
   
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
                <h5><em>Poission</em> function</h5>
                
                 <p>Returns the <a href="">poisson distrubtion</a> used for predicting the number of events that will occur within a specified time interval. For example, the number of car accidents at a large intersection during rush hour or the number of calls recieved by a call center during lunch hour.
                 </p>
                 
                 <h6>Syntax:</h6>
                <div class="latex">
                    ${POISSON.DIST(n, \lambda ,cumulative)}$  
                    <ul>
                        <li>${n}$ is the number of events of interest or being observed</li>
                        <li>${\lambda}$ is the expected number of events</li>
                        <li>${cumulative}$ is set to True or False.</li>
                    </ul>
                    <p>
                        If cummulative is set to False, it returns the probability that the actual number of events that will occur will be equal to x. <br>
                        The formula used is:
                    </p>
                        <div class="latex">
                            $${\frac{e^{-\lambda}{\lambda^{n}}}{n!}}$$
                        </div>
                    
                    <p>
                        If cummulative is set to True, it returns the probability that the number of events occuring will be less than or equal to n. The formula used is:
                    </p>
                         <div class="latex">
                            $${\sum_{k=0}^{n}\frac{e^{-\lambda}{\lambda^{n}}}{n!}}$$
                         </div>
                </div>
                
                 <h6>Example 1:</h6>
                 <p>The average number of accidents at a large intersection per month follows a poisson distribution with a mean of 5. Find the probability that next month there will be exactly 2 accidents.</p>
                 <h6>Answer:</h6>
                <p>In the Power BI formula bar define the following measures:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                      Poisson2 = POISSON.DIST(2,5,False)
	             </pre>
	             <p>Returns: </p>
                 <ul>
	                 <li>
	                     ${\dfrac{e^{-\lambda}{\lambda^{n}}}{n!}} = {\dfrac{e^{-5}{5^{2}}}{2!}}  =  0.0842 $
	                 </li>
	             </ul><br>
	             
	             
	            <h6>Example 2:</h6>
                 <p>The average number of accidents at a large intersection per month follows a poisson distribution with a mean of 5. Find the probability that next month there will be 2 accidents or less.</p>
                 <h6>Answer:</h6>
                <p>In the Power BI formula bar define the following measures:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                        Poisson2 = POISSON.DIST(2,5,True)
	             </pre>
	             <p>Returns: </p>
                 <ul>
	                 <li class = "li_indent">
	                     ${\sum_{k=0}^{n}\dfrac{e^{-\lambda}{\lambda^{n}}}{n!}}$ 
	                 </li><br>
	                 <li> $ = {\sum_{k=0}^{2}\dfrac{e^{-5}{5^{2}}}{2!}}$ </li>
	                 <li>$ = {\dfrac{e^{-5}{5^{0}}}{0!}} + {\dfrac{e^{-5}{5^{1}}}{1!}} + {\dfrac{e^{-5}{5^{2}}}{2!}}$</li><br>
	                 <li> $ = {0.125}$ </li>
	             </ul><br>
	             
	             <h6>Power BI Demo:</h6>
	             
	           <figure class = "custom_graph_figures">        
                <div class="video-container">
                
              <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNzJlZGY3OGEtZjJhMC00MmE0LThjOTAtYzE3MjRkYmFiYWQ1IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
                </div>
                <figcaption class = "custom_figcaption">
                </figcaption>
              </figure> 

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
