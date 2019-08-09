<?php include "includes/header0.php"; ?>
  
<title>Stats Functions in Power BI | Dash-Intel</title>
<meta name="title" content= "Stats functions | Dash-Intel" />
<meta name="metatitle" content= "Using stats functions in Power BI | Dash-Intel"/>
<meta name="description" content= "Use stats functions in Power BI to calculate the daily average sales for any given date range.">
   
   
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
      
            
            <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Modeling</h2>
               
               <div class="whitebox">
                <h4 class = custom_h4> Statistical Functions in Power BI</h4>
                <p>This section covers some basic stats functions and formulas you can apply to your Power BI analysis:</p>
                <ul>
                    <li>Using <a href="statistical_functions_average.php" target="_blank">AVERAGEX</a> to find the daily average</li>
                    <li>MIN and MAX functions to find extreme values</li>
                    <li><a href="statistical_functions_stdev.php" target="_blank">Standard Deviation</a> to see how your data varies</li>
                    <li><a href="statistical_functions_rank.php" target="_blank">RANK</a> functions to see how value stack up against each other</li>
                </ul>
                <p>For a full list of  <a href="references_statistical_functions.php" target="_blank">statistical functions</a></p>
                </div>
                
                <div class="smokebox">
                <h5>DAILY AVERAGE</h5>
                  <p>
                    A <em>Daily Average</em> is the average value for all dates in a given date range. While you might be able to get away with summing up the totals and dividing by the number of days in the month, a more robust way that works for any date range you filter, whether that by year, quarter or month is shown below:
                 </p>
                 <p>Example: Find Daily Average Revenue</p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                      Daily Avg = AVERAGEX(CalenderDate,CALCULATE(SUM(TransactionData[Revenue])))
	            </pre> 				 
                
                  <ul>
                      <li> <em>AVERAGEX</em> calculates the average for an expression that is evaluated over a table.</li>
                      <li>The expression is the value that we would like to return, which we must wrap inside the <em>CALCULATE</em> function.</li>
                  </ul>
                 
                   <p class = "alert alert-info">
                        <strong>Remember: </strong>Use a unique and seperate caldendar table for date values. 
                   </p><br>
             </div>
                <div class="smokebox">
                    <h5><em>MINX</em></h5>
                    <p>Example: Find the smallest sales for any date range.</p>
                    <pre class="brush:dax; title: ; notranslate" title="">
                      Largest Value = MINX(CalenderDate,CALCULATE(SUM(TransactionData[Revenue])))
	                </pre><br>
	           </div>
                <div class="smokebox">
                   <h5><em>MAXX</em></h5>
                    <p>Example: Find the largest sales for any date range.</p>
                    
                    <pre class="brush:dax; title: ; notranslate" title="">
                      Largest Value = MAXX(CalenderDate,CALCULATE(SUM(TransactionData[Revenue])))
	                </pre> 	
                    
                    <p>Ideas for using <em>MINX</em> or <em>MAXX</em></p>
                    <ul>
                        <li>Finding the smallest transaction or order amount</li>
                        <li>Finding the lowest value customer</li>
                        <li>Finding region with lowest ROI</li>
                    </ul>
                     <ul>
                        <li>Customers/businesses with highest AOV</li>
                        <li>Customers/businesses with the highest profit margin</li>
                        <li>Highest <a href="#">Churn Rate</a> by product</li>
                    </ul>
              </div>
                <div class="smokebox">
                    <h5>Variance and Standard Deviation</h5>
                    
                    <p><em>Variance</em> is a measure of dispersion of your data from its average value. The variance states how much your data fluctuates or varies. <em>Standard Deviation</em> is another measure for dispersion. It is the square root of variance, and will have the same units as the average value.  When used togther with the mean you can find a range of expected values.
                    </p>
                    
                     <pre class="brush:dax; title: ; notranslate" title="">
                            STDEV of Sales = STDEVX.S(CalenderDate,CALCULATE(SUM(TransactionData[Revenue])))
	                </pre>
                    
              
                    <p>The following gives the standard deviation for your daily sales. <a href="">Learn more about Standard Deviation</a>.</p>
                    
                    <a href="modeling_stats_functions_ex1.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>	
                </div>
                
                <div class="smokebox">
                    <h5>RANKX</h5>
                    <p>Use <em>RANKX</em> to rank items from from largest to smallest based. For instance in POWER BI we write: </p>
                    
                    <pre class="brush:dax; title: ; notranslate" title="">
                            Rank Sales_By_State = RANKX(ALL(states[state]),CALCULATE(SUM(TransactionData[Revenue])))
	                </pre> 	
                   <a href="modeling_stats_functions_ex2.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>	
                 	     
                    <p>This ranks states in order based off of total revenue. Notice the <em>ALL</em>
                    function wraps our column <em>states[state]</em> in the first parameter. When using the <em>RANKX</em> function you need to use <em>ALL</em> around your table or column names.
                    </p>
                </div>
                
                <div class="whitebox">
                    <h5>SUMMARY</h5>
                    <p>All of the statistical measures above have to same format. They have a <em>Calendar Date</em> table as the first parameter, and a expression to evaluate as the second argument.</p>
                    
                    <p>If you need to evaluate a specific column rather than a table, use the ALL function to wrap that column in. 
                    Since a table is needed in the first parameter, the <em>ALL</em> function essentially converts the column into a "temporary table" which can then be used. 
                    </p>
                    <p>For the second parameter, if you are not using a specific <em>measure</em>  then you need to wrap <em>CALCULATE</em> around the metric that is aggregrated (as shown above). This is needed to perform a <em>context transition</em>.</p>
              </div>
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
