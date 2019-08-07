<?php include "includes/header0.php"; ?>
  
<title>List of Time Intelligence Functions | Dash-Intel</title>
<meta name="title" content= "Power BI Time intelligence functions  | Dash-Intel" />
<meta name="metatitle" content= "Time intelligence functions in Power BI | Dash-Intel"/>
<meta name="description" content= "The following is a reference list of time intelligence functions in Power BI with examples. When using time intelligence functions in Power BI make sure to create a seperate date table which is connected to your other data tables.">
   

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
           <h4>A List of Time Intelligence Functions</h4>
           <p>
               When using time intelligence functions, create a separate <a href="modeling_calendar.php" target="_blank">calendar date table </a>in Power BI desktop or powerpivot to ensure the formulas work as intended.
               Parameters in square brackets are optional.
           </p>
           <p>
           Often the expression used in the examples is "sales". If the definitions are not clear, you can try them yourself with Power BI using the formulas, examples and dataset provided.
           </p>
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
                      <a href="time_intelligence_functions_closingbalance.php" target="_blank">CLOSINGBALANCEMONTH(expression , dates ,[filter])</a>

                  </td>
                  <td>
                    Evaluates specified expression for the last day of the given month. 
                  </td>
                </tr>
                
                              <tr>
                  <td>
                      <a href="time_intelligence_functions_closingbalance.php" target="_blank">CLOSINGBALANCEQUARTER(expression , dates ,[filter])</a>

                  </td>
                  <td>
                    Evaluates specified expression for the last day of the given quarter. 
                  </td>
                </tr>
                <tr>
                  <td>
                      <a href="time_intelligence_functions_closingbalance.php" target="_blank">CLOSINGBALANCEYEAR(expression , dates , [filter])</a>

                  </td>
                  <td>    
                   Evaluates specified expression for the last day of the given year. 
                  </td>
                </tr>
                
                      <tr>
                  <td>
                <a href="time_intelligence_functions_dateadd.php" target="_blank">DATEADD(date ,
                number_of_intervals to shift , interval)</a>

                  </td>
                  <td>
                    Used for shifting (offsetting) a set of dates. Intervals can be specifed as day, month, quarter or year.
                  </td>
                </tr>
                
                
                <tr>
                  <td>
                  <a href="time_intelligence_functions_datesbetween.php" target="_blank">DATESBETWEEN(column , start_date ,
                end_date)</a>
                  </td>
                  <td>
                 Returns a table of dates. Create as a new table, or use as a filter in a CALCULATE expression. 
                      
                  </td>
                </tr>
                
                <tr>
                  <td>
                <a href="time_intelligence_functions_datesinperiod.php" target="_blank">DATESINPERIOD(date
                ,start_date ,number_of_intervals ,
                intervals)</a>

                  </td>
                  <td>
                  Returns a table of dates. Create as a new table, or use as a filter in a CALCULATE expression. Intervals can be specifed as day, month, quarter or year.
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_dates_mtd.php" target="_blank">DATESMTD(date)</a> 
                  </td>
                  <td>
                Use with CALCULATE to return month to date sales. This will "reset" each month.     
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_dates_mtd.php" target="_blank">DATESQTD (date) </a> 
                  </td>
                  <td>
                Use with CALCULATE to return quarter to date sales. This will "reset" each quarter.        
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_dates_mtd.php" target="_blank">DATESYTD (date [Year_end_date])  </a>    
                  </td>
                  <td>
                Use with CALCULATE to return year to date sales. This will "reset" each year.        
                  </td>
                </tr>
                
                <tr>
                  <td>
                <a href="time_intelligence_functions_endofmonth.php" target="_blank">ENDOFMONTH(date)</a>   
                  </td>
                  <td>
                Returns the last day of the month       
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_endofmonth.php" target="_blank">ENDOFQUARTER(date)</a>       
                  </td>
                  <td>
                Returns the last day of the quarter      
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_endofmonth.php" target="_blank">ENDOFYEAR(date)</a>  
                  </td>
                  <td>
                Returns the last day of the year      
                  </td>
                </tr>
          
                <tr>
                  <td>
                <a href="time_intelligence_functions_firstdate.php" target="_blank">FIRSTDATE (datecolumn) </a>
                  </td>
                  <td>
                Use to return the first date in your table.      
                  </td>
                </tr>
                
                 <tr>
                  <td>
                <a href="time_intelligence_functions_firstdate.php" target="_blank">FIRSTNONBLANKDATE (datecolumn , [expression]) </a>
      
                  </td>
                  <td>
                Returns the first value in the column, where the expression is not blank.      
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_lastdate.php" target="_blank">LASTDATE (datecolumn) </a>
                  </td>
                  <td>
                Use to return the last date in your table.          
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_lastdate.php" target="_blank">LASTNONBLANKDATE (datecolumn ,[expression]) </a>
      
                  </td>
                  <td>
                Returns the last value in the column, where the expression is not blank.      
                  </td>
                </tr>
                
                <tr>
                  <td>
                <a href="time_intelligence_functions_next.php" target="_blank">NEXTDAY(date)</a>     
                  </td>
                  <td>
                Use with CALCULATE to return next day sales ( relative to the dates you are using )
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_next.php" target="_blank">NEXTMONTH(date)</a>
                  </td>
                  <td>
                Use with CALCULATE to return next month sales ( relative to the dates you are using )      
                  </td>
                </tr>
                <tr>
                  <td>
               <a href="time_intelligence_functions_next.php" target="_blank">NEXTQUARTER (date)</a>      
                  </td>
                  <td>
                Use with CALCULATE to return next quarter sales ( relative to the dates you are using )      
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_next.php" target="_blank">NEXTYEAR(date[,YE_date])</a>    
                  </td>
                  <td>
                <a href="">
                 Use with CALCULATE to return next year sales ( relative to the dates you are using ) </a>     
                  </td>
                </tr>
                
                <tr>
                  <td>
                <a href="time_intelligence_functions_openingbalance.php" target="_blank">OPENINGBALANCEMONTH(expression, dates , [filter])</a>
      
                  </td>
                  <td>
                Evaluates an expression at the first date of a month.   
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_openingbalance.php" target="_blank">OPENINGBALANCEQUARTER(expression, dates , [filter])</a>
      
                  </td>
                  <td>
                Evaluates an expression at the first date of a quarter.   
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_openingbalance.php" target="_blank">OPENINGBALANCEYEAR(expression , dates , [[filter]])</a>
      
                  </td>
                  <td>
                Evaluates an expression for the first date of a year.       
                  </td>
             </tr>
                
                
                
                
                  <tr>
                  <td>
                 <a href="time_intelligence_functions_parallelperiod.php" target="_blank">PARALLELPERIOD(date)  </a>   
                  </td>
                  <td>
                Returns a single column <em>table</em> of dates which are parallel to the date column shifted by specified number of intervals forward or backward.      
                  </td>
                </tr>
                <tr>
                  <td>
                      <a href="time_intelligence_functions_previous.php" target="_blank">PREVIOUSDAY(date)</a>
                  </td>
                  <td>
                Use with CALCULATE to return previous day sales
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_previous.php" target="_blank">PREVIOUSMONTH(date)</a>   
                  </td>
                  <td>
                Use with CALCULATE to return previous month sales      
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_previous.php" target="_blank">PREVIOUSQUARTER(date) </a>      
                  </td>
                  <td>
                Use with CALCULATE to return previous quarter sales
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_previous.php" target="_blank">PREVIOUSYEAR(date)</a>       
                  </td>
                  <td>
                Use with CALCULATE to return previous year sales      
                  </td>
                </tr>
                  <tr>
                  <td>
                <a href="time_intelligence_functions_sameperiodlastyear.php" target="_blank">SAMEPERIODLASTYEAR(date) </a> 
                  </td>
                  <td>
                Use with CALCULATE to return sales from last year. 
                  </td>
                </tr>
                
                <tr>
                  <td>
                <a href="time_intelligence_functions_startof.php" target="_blank">STARTOFMONTH (date)</a>   
                  </td>
                  <td>
            Returns the first day of the month 
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_startof.php" target="_blank">STARTOFQUARTER (date)  </a>     
                  </td>
                  <td>
            Returns the first day of the quarter          
                  </td>
                </tr>
                <tr>
                  <td>
                <a href="time_intelligence_functions_startof.php" target="_blank">STARTOFYEAR(date,[YEAR])   </a>   
                  </td>
                  <td>
            Returns the first day of the year  
                  </td>
                </tr>

                <tr>
                  <td>
            <a href="time_intelligence_functions_total_mtd.php" target="_blank">TotalMTD(expression,dates,[filter])</a>
                  </td>
                  <td>
            Use with CALCULATE to return month to date sales. (i.e see DATESMTD)            
                  </td>
                </tr>
                <tr>
                  <td>
            <a href="time_intelligence_functions_total_mtd.php" target="_blank">TotalQTD(expression,dates,[filter])</a>     
                  </td>
                  <td>
             Use with CALCULATE to return quarter to date sales. (i.e see DATESQTD)               
                  </td>
                </tr>
                <tr>
                  <td>
            <a href="time_intelligence_functions_total_mtd.php" target="_blank">TotalYTD(expression,dates,[filter])</a> 
                  </td>
                  <td>
             Use with CALCULATE to return year to date sales. (i.e see DATESYTD)             
                  </td>
                </tr>
              </tbody>
        </table><br>
        
        </div> <!--Closes reference tag-->
            
            
          <?php include "includes/footer_0.php"; ?>  
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
