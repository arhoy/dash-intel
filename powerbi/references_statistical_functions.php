<?php include "includes/header0.php"; ?>
   

<title>List of Statistical Functions in Power BI | Dash-Intel</title>
<meta name="title" content= "List of Statistical Functions in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Statistical Functions in Power BI | Dash-Intel"/>
<meta name="description" content= "Comprehensive list of statistical functions in Power BI. The following is a list with examples of how to use stats functions in Power BI.">
   

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
    
           <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Features</h2>
           <h4>A List of Statistical Functions</h4>
           <p>
               Some of these functions in DAX or no longer needed due to advancements in Power BI to summarize data more efficiently. Each function in the table links to an example page where the function is described in more detail with a demo.
           </p>
           <p>If there is a more efficient (less complex, more intuitive) way to get the same result in Power BI it will be noted.</p>
       
           <div class="pbi_reference">
           <table class="table table-hover table-bordered">
              <col style="width:50%">
              <col style="width:50%">
              <thead class = "custom_thead">
                <tr>
                  <th>Name of function</th>
                  <th>Description</th>
                </tr>
              </thead>
              <tbody class = "custom_tbody">
                <tr>
                  <td>
                      <a href="statistical_functions_average.php" target="_blank">AVERAGE(column)</a>

                  </td>
                  <td>
                    Returns the arithmetic mean for the given column. 
                  </td>
                </tr>
                
                 <tr>
                  <td>
                      <a href="statistical_functions_average.php" target="_blank">AVERAGEA(column)</a>

                  </td>
                  <td>
                   Returns the arithmetic mean for the given column. Handles, non-numeric data types.
                  </td>
                </tr>
                 <tr>
                  <td>
                      <a href="statistical_functions_average.php" target="_blank">AVERAGEX(table,expression)</a>

                  </td>
                  <td>
                   Calculates the (arithmetic mean) for an expression in the specified table.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_permutations+combinations.php" target="_blank"> COMBIN(n,k)</a>

                  </td>
                  <td>
                      Returns the total number of ways k items can be selected from n items given that the order does NOT matter.
                  </td>
                </tr>
                
                  <tr>
                  <td>
                      <a href="statistical_functions_confidence.php" target="_blank">CONFIDENCE.NORM(alpha,standard_dev,size)</a>

                  </td>
                  <td>
                     Returns the <a href="">margin of errror</a> for a normal distribution based on your chosen significance level (alpha), known or estimated standard deviation, and sample size.  
                  </td>
                </tr>
                
                <tr>
                  <td>
                      <a href="statistical_functions_confidence.php" target="_blank">CONFIDENCE.T(alpha,standard_dev,size)</a>

                  </td>
                  <td>
                     Returns the <a href="">margin of errror</a> for a student's t distribution based on your chosen significance level (alpha), known or estimated standard deviation, and sample size.  
                  </td>
                </tr>
                
                
                  <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNT(column)</a>

                  </td>
                  <td>
                       Counts the number of rows in a column where only numbers are counted.
                  </td>
                </tr>
                
                
                 <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNTA(column)</a>

                  </td>
                  <td>
                   Counts the number of rows in a column that are not empty.
                  </td>
                </tr>
                
                <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNTAX(column)</a>

                  </td>
                  <td>
                   Counts the number of rows in a column that are not empty. Use when you want to count specific non-numeric criteria row by row.
                  </td>
                </tr>
                
                 <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNTBLANK(column)</a>

                  </td>
                  <td>
                   Counts the number of blank rows in the column.
                  </td>
                </tr>
                
                
                 <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNTBLANK(column)</a>

                  </td>
                  <td>
                   Counts the number of blank rows in the column.
                  </td>
                </tr>
                
                
                <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNTROWS(table)  </a>

                  </td>
                  <td>
                      Counts the number of rows in a table.
                  </td>
                </tr>
                
                
                
                   <td>
                      <a href="statistical_functions_count.php" target="_blank">COUNTX(column)</a>

                  </td>
                  <td>
                   Counts the number of rows in a column that are numeric. Use when you want to count specific numeric criteria row by row.
                  </td>
                
                
                 <tr>
                  <td>
                      <a href="statistical_functions_crossjoin.php" target="_blank">CROSSJOIN(table,table,[,table])</a>

                  </td>
                  <td>
                      Returns a table which contains the product or all rows from all table arguments. Two are more tables are needed.
                  </td>
                </tr>
                
                
                 <tr>
                  <td>
                      <a href="statistical_functions_count.php" target="_blank">DISTINCTCOUNT(column)</a>

                  </td>
                  <td>
                      Returns the number of distinct rows in the column
                  </td>
                </tr>
                
                
                
                 <tr>
                  <td>
                      <a href="statistical_functions_exponential.php" target="_blank">EXPON.DIST(x,lambda,cumulative)</a>
                  </td>
                  <td>
                      Returns the exponential probability density function, or the cumulative distribution function depending whether the final parameter is true or false.
                  </td>
                </tr>
                
                
                
                 <tr>
                  <td>
                      <a href="statistical_functions_generate.php" target="_blank">GENERATE(table,table)</a>

                  </td>
                  <td>
                      Returns a table of products between two tables where the current row will not be included.
                  </td>
                </tr>
                
                <tr>
                  <td>
                      <a href="statistical_functions_generate.php" target="_blank">GENERATEALL(table,table)</a>

                  </td>
                  <td>
                      Returns a table of products between two tables where the current row will be included
                  </td>
                </tr>
                
                 <tr>
                  <td>
                      <a href="statistical_functions_geomean.php" target="_blank">GEOMEAN(column)</a>

                  </td>
                  <td>
                     Returns the geometric mean for the column.
                  </td>
                </tr>
                
                 <tr>
                  <td>
                      <a href="statistical_functions_geomean.php" target="_blank">GEOMEANX(table,expression)</a>

                  </td>
                  <td>
                      Returns the geometric mean for an expression evaluated over a table.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="" target="_blank">MAX(column)</a>

                  </td>
                  <td>
                      Returns the max value in a numeric column
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="" target="_blank">MAXA(column)</a>

                  </td>
                  <td>
                      Returns the max value in a column consisting of number, dates or logical values.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="" target="_blank">MAXX(table,expression)</a>

                  </td>
                  <td>
                      Returns the max value for an expression evaulated over a table.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="" target="_blank">MEDIAN(column)</a>

                  </td>
                  <td>
                      Returns the median value for a column
                  </td>
                </tr>
                
                
                <tr>
                      <td>
                      <a href="statistical_functions_median.php" target="_blank">MEDIANX(table,expression)</a>

                  </td>
                  <td>
                      Returns the median value for an expression evaluated over a table.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_percentile.php" target="_blank">PERCENTILE.EXC(column,k)</a>
                  </td>
                  <td>
                      Returns the kth percentile for a column of numeric values using ${k(n+1)}$ to obtain the rank.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_percentile.php" target="_blank">PERCENTILE.INC(column,k)</a>

                  </td>
                  <td>
                      Returns the kth percentile for a column of numeric values using ${k(n-1) + 1}$ to obtain the rank.
                  </td>
                </tr>
                
                    <tr>
                  <td>
                      <a href="statistical_functions_percentile.php" target="_blank">PERCENTILEX.EXC(column,k)</a>
                  </td>
                  <td>
                      Returns the kth percentile for an expression evaluated over each row in a table using ${k(n+1)}$ to obtain the rank.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_percentile.php" target="_blank">PERCENTILEX.INC(column,k)</a>

                  </td>
                  <td>
                      Returns the kth percentile for an expression evaluated over each for in a table using of numeric values using ${k(n-1) + 1}$ to obtain the rank.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_permutations+combinations.php" target="_blank"> PERMUT(n,k)</a>

                  </td>
                  <td>
                      Returns the total number of ways k items can be selected from n items given that the order does matter.
                  </td>
                </tr>
                
                <tr>
                      <td>
                      <a href="statistical_functions_poisson.php" target="_blank">POISSON.DIST(x,mean,cumulative)</a>
                  </td>
                  <td>
                      Returns the probability or cummulative probability of x successes occuring for a given mean.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_rank.php" target="_blank">RANK.EQ(value,column,[order])</a>

                  </td>
                  <td>
                      Returns the rank of a specific value from a column. The optional order parameter specifies ascending or descending order.
                  </td>
                </tr>
                
                   <tr>
                  <td>
                      <a href="statistical_functions_rank.php" target="_blank">RANKX()</a>

                  </td>
                  <td>
                      Returns the rank of an expression evaluated over a table.
                  </td>
                </tr>
                
                
                <tr>
                  <td>
                      <a href="statistical_functions_stdev.php" target="_blank">STDEV.P(column)</a>

                  </td>
                  <td>
                      Returns the population standard deviation from a column 
                  </td>
                </tr>
                
                
                   <tr>
                  <td>
                      <a href="statistical_functions_stdev.php" target="_blank">STDEV.S(column)</a>

                  </td>
                  <td>
                      Returns the sample standard deviation from a column 
                  </td>
                </tr>
                
                
                
                   <tr>
                  <td>
                      <a href="statistical_functions_stdev.php" target="_blank">STDEVX.P</a>

                  </td>
                  <td>
                      Returns the population standard deviation for an expression evaluated row by row over a table.
                  </td>
                </tr>
                
          
                
                <tr>
                  <td>
                      <a href="statistical_functions_stdev.php" target="_blank">STDEVX.S</a>

                  </td>
                  <td>
                       Returns the sample standard deviation for an expression evaluated row by row over a table.
                  </td>
                </tr>
                

                
            
                
                
    
              </tbody>
        </table><br>
        
        </div> <!--Closes reference tag-->
            
            
          <?php include "includes/footer_0.php"; ?>  
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
