<?php include "includes/header0.php"; ?>
  
<title>Moving Annual Total in Power Bi | Dash-Intel</title>
<meta name="title" content= "Moving annual total in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Moving annual totals in Power BI | Dash-Intel" />
<meta name="description" content="Learn how to create moving annual totals in Power BI. Create several useful custom date functions using time intelligence functions.">
   
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
               <div class="whitebox">
                <h4 class = custom_h4> Date Functions</h4>
                <p>This section shows how to create several useful custom date functions using calculate, a calendar table and time intelligence functions.
                </div>
                <div class="smokebox">
                <h5>Moving Annual Total</h5>
                 <p>
                    A <em>Moving Annual Total (MAT)</em> finds the total value over the last 12 months. This can be computed day over day, month over month or quarter over quarter depending on how you are grouping your data. If you are reporting sales figures by month then the <em>MAT</em> will change month over month to reflect the last 12 months of sales. If you have seasonality in your data where sales are particularly high in some months and low in others, then a <em>MAT</em> will eliminate these seasonal effects. You can then plot this figure for forecasting or predicting trends.
                 </p>
            
                 <h5>EXAMPLE:</h5>
                 <p>Create a measure in the power BI formula bar called <em>MAT</em> which returns the moving annual total for any context.</p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                   MAT (moving annual total) = CALCULATE(     
                            SUM(TransactionData[Revenue]),
	                        DATESINPERIOD(CalenderDate[Date],LASTDATE(CalenderDate[Date]),-1,YEAR) 
	                        )      
	            </pre>
                 <p>
                      This formula uses <em>CALCULATE</em> where the first parameter is the value that gets returned. The second parameter specifies the date range using the <em>DATESINPERIOD</em> function. <em>DATESINPERIOD</em> has four arguments:
                 </p>
                 <ul>
                     <li>The date column used</li>
                     <li>The last date that you want to return</li>
                     <li>The offset</li>
                     <li>What time period you want to return</li> 
                 </ul><br>
                 <a href="modeling_date_functions_ex1.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>
                 </div>
                 
                <div class="smokebox">
                 <h5>Moving Monthly Total</h5>
                 <p>Similar to a <em>MAT</em> a <em>Moving Monthly Total (MMT)</em> is more granular in time. It returns dates up to one month prior. (ie. on February 15th a <em>moving monthly total</em> return all dates from Jan 15th to Feb 15th
                 </p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                   MAT (moving annual total) = CALCULATE(
                            SUM(TransactionData[Revenue]),
	                        DATESINPERIOD(CalenderDate[Date],LASTDATE(CalenderDate[Date]),-1,MONTH) 
	                        )      
	            </pre> <br>
              <a href="modeling_date_functions_ex3.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a><br>
               </div>
               
               <div class="smokebox">
               <h5>Moving Quarterly Total</h5>
                 <p>
                     Similar to a <em>MAT</em>. A <em>Moving Quarterly Total</em> returns dates up to one quarter prior.
                 </p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                   MAT (moving annual total) = CALCULATE(
                            SUM(TransactionData[Revenue]),
	                        DATESINPERIOD(CalenderDate[Date],LASTDATE(CalenderDate[Date]),-1,QUARTER) 
	                        )      
	            </pre> <br>
               <a href="modeling_date_functions_ex2.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a><br>
            </div>
            
            <div class="smokebox">
                <h5>Moving 6 Month Total</h5>
                 <p>
                     To get the current last 6 months of data.
                 </p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                   MAT (moving annual total) = CALCULATE(
                            SUM(TransactionData[Revenue]),
	                        DATESINPERIOD(CalenderDate[Date],LASTDATE(CalenderDate[Date]),-2,QUARTER) 
	                        )      
	            </pre> 
               <p> or </p>
                   <pre class="brush:dax; title: ; notranslate" title="">
                   MAT (moving annual total) = CALCULATE(
                            SUM(TransactionData[Revenue]),
	                        DATESINPERIOD(CalenderDate[Date],LASTDATE(CalenderDate[Date]),-6,MONTH) 
	                        )      
	            </pre>
                 <p>Since a quarter is 3 months, we offset by -2 to get the previous two quarters (6 months). As usual we put in the last date of the calendar date column to get the last date of the previous two quarters. Alternatively instead of <em>QUARTER</em> we can use <em>MONTHS</em> and offset by -6.</p>
                 
                 <p>In all the examples above, the <em>moving total</em> finds the last date where there is revenue in the transaction data table and returns all values specified by the offset and time period used. 
                 </p>
                  <a href="modeling_date_functions_ex4.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>
                 <p class = "alert alert-info">
                     With all examples above, you can use any <em>aggregation</em> in place of SUM(TransactionData[revenue]).
                 </p>
            </div> 
              
               <div class="smokebox">
                <h5>Running Total</h5>
                <p>
                    Returns all dates from a given time period up to the most current date where there is data.
                </p>
                
                 <p>
                     This example finds all revenue from the beginning of time up until the last date.  
                 </p>
      
                 <pre class="brush:dax; title: ; notranslate" title="">
                      Running Total = CALCULATE(
                              SUM(TransactionData[Revenue]),
                              FILTER(ALL(CalenderDate[Date]),CalenderDate[Date] &lt;= MAX(CalenderDate[Date])))
                              
                </pre> 	

                 <a href="modeling_date_functions_ex5.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>
               </div>
                
              <div class="smokebox">
                <h5>Year to Date (<em>YTD</em>) Comparison</h5>
                <p>
                    The task is to get year to date sales for this year and year to date sales at the same time last year. Finally, compare the percentage difference between the two.
                </p> 	
                <h5>Step 1: YTD Sales:</h5>		 
                <p>To automate year to date (YTD) sales, define the following measure in Power BI:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                      
                    YTD_This_Year = TOTALYTD(SUM(TransactionData[Revenue]),CalenderDate[Date])
                      
                </pre> 	
                <ul>
                    <li><em>TOTALYTD</em> takes a measure and a date column as parameters.</li>
                </ul>
                <h5>Step 2: YTD Sales from Last Year:</h5>	
                 <p>To get <em>YTD</em> sales for the same period but last year:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                      
                   YTD_Last_Year = TOTALYTD(SUM(TransactionData[Revenue]),SAMEPERIODLASTYEAR(CalenderDate[Date]))
                      
                </pre> 	
                <p>
                    Notice this formula is almost identical to <em>YTD This Year</em>. Simply replace 
                    <em>CalendarDate[Date]</em> with <em>SAMEPERIODLASTYEAR(CalendarDate[Date])</em>. The <a href="time_intelligence_functions_sameperiodlastyear.php" target="_blank">SAMEPERIODLASTYEAR</a> function works to offset all the dates by one year.
                </p>
                
                <h5>Step 3: Compare the percentage difference:</h5>	
                <p>
                 To find the percentage difference from last year use the percentage difference formula:</p>
                 <div>
                   <p>$ \dfrac{(finalValue - initialValue)}{intitalValue} $</p>  
                 </div>
                 
                    
                <p>In the formula bar write:</p> 
                
                <pre class="brush:dax; title: ; notranslate" title="">
                      
                   %_Difference_from_Last_Year = DIVIDE([YTD This Year] - [YTD Last Year],[YTD Last Year],0)
                      
                </pre> 	
                <p>The <a href="modeling_dividefunction.php" target="_blank">divide function</a> handles zero division error. The baseline metric (initial value) is YTD sales from last year.</p>
                 <a href="modeling_date_functions_ex6.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>
              </div>
                
             <div class="smokebox">
                   <h5>Summary of functions used</h5>
            
                     <table class="table table-hover table-bordered">
                          <col style="width:30%">
                          <col style="width:70%">
                          <thead class = "custom_thead">
                            <tr>
                              <th>Name</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbody">
                            <tr>
                              <td><em>ALL</em></td>
                              <td>Returns all rows in a table or column. Ignores other filters applied (i.e from slicers)</td>
                            </tr>
                            
                             <tr>
                              <td><em>DATESINPERIOD</em></td>
                              <td>Returns a table of dates. Create as a new table, or use as a filter in a CALCULATE expression. Intervals can be specifed as day, month, quarter or year.</td>
                            </tr>
                            <tr>
                              <td><em>DATESBETWEEN</em></td>
                              <td>Returns a table of dates</td>
                            </tr>
                            <tr>
                              <td><em>FILTER</em></td>
                              <td>Returns a filtered table. A subset of the original data table used.</td>
                            </tr>
                            <tr>
                                <td><em>FIRSTDATE</em></td>
                                <td>Return the same period from last year</td>
                            </tr>
                            <tr>
                              <td><em>LASTDATE</em></td>
                              <td>Returns the last date in column</td>
                            </tr>
                            <tr>
                             <td><em>TOTALYTD</em></td>
                             <td>Returns year to date values for an expresesion</td>
                            </tr>
                          
                          </tbody>
                    </table>
                </div>
            <p>See also: <a href="references_time_intelligence_functions.php" target="_blank">Resources for Time Intelligence Functions</a><br>
            Up Next: <a href="modeling_stats_functions.php">Stats Functions</a>
            </p>

        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
