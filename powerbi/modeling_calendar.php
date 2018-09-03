<?php include "includes/header0.php"; ?>
  
<title>Date Tables in Power BI | Dash-Intel</title>
<meta name="title" content= "Creating a date table in Power BI | Dash-Intel" />
<meta name="metatitle" content= "How to create a date table in Power BI | Dash-Intel" />
<meta name="description" content="Date tables are needed in Power BI to use time intelligence functions to create automated and interactive reports.">
   
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
                <h4 class = custom_h4> Date Table</h4>
                 <h5>What is a date table and why is it needed?</h5>
                 <p> 
                 Before you start using date and <a href="references_time_intelligence_functions.php" target="_blank">time intelligence functions</a> in DAX and Power BI you should create a seperate date table. A date table or calendar table is a table which contains only date related data. For instance, every calendar table must have a date column which contains unique dates from the start and end date specified. (The start and end dates can later be changed if you like). If your data is at the day level of granularity (i.e you look at daily sales) then it is best practice to have a date table even if you are not using time intelligence functions. It keeps your data organized and you can create date related columns such day of week, or specify holidays in your date table. This date table is joined with the other tables in your data model under <em>relationship view.</em> It is easy and quick to set up. Once done you can easily compare, group, filter and summarize your data for any specific period in time.
                 </p>
                </div>
                
                <div class="smokebox">
                 <h5>How to make a date table:</h5>
                 <p>Create a <em>new table</em> in Power BI and in the formula bar type or paste in the following:</p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                     CalendarTable = CALENDAR(DATE(2010,1,1),DATE(2020,12,31))
	            </pre>
                
                <p>This creates a date table with a unique set of dates from Jan 1st 2010 to Dec 31st 2020. It will also create a year/quarter/month/day hierarchy which enables you to drill up or down on specific data in <a href="references_powerbi_desktop.php#data_drill" target="_blank">drill down</a> mode.</p>
                 
                 <p>Steps to create a Calendar Table:</p>
                     <ul>
                         <li>In Power BI Desktop: Select the "Modeling" Tab</li>
                         <li>Select "New Table"</li>
                         <li>Paste in the CaldendarTable above</li>
                     </ul>
                     
                <p>You may also need to create a relationship between the newly created CaldendarTable and the table that has all your data. Under (but not in) file, select the relationship icon and connect the two tables together via the date columns. This is a simple drag and drop. 
                </p><br>
            </div>
               
            <div class="smokebox">
               <h5>Building Up Your Calendar Table:</h5>
                 <p>
                     Once this table is added you can create new columns in this table to build your calendar table. The table below shows some new columns you can add.
                 </p>
                 
                 <table class="table table-hover table-bordered">
                          <col style="width:50%">
                          <col style="width:50%">
                          <thead class = "custom_thead">
                            <tr>
                              <th>Desciption</th>
                              <th>Expression Used</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbody">
                            <tr>
                              <td>Return a custom date format: (Feb/01/2017)</td>
                              <td>FORMAT([Date], "mmm/DD/YYYY")</td>
                             
                            </tr>
                            <tr>
                              <td>Return Year</td>
                              <td>YEAR([Date])</td>
                            </tr>
                            <tr>
                              <td>Return Month Number</td>
                              <td>FORMAT([Date], "MM")</td>
                            </tr>
                            <tr>
                              <td>Return Year then Month Number: (2017/02)</td>
                              <td>FORMAT([Date], "YYYY/MM" )</td>
                            </tr>
                            <tr>
                              <td>Return Week of Year Number</td>
                              <td>weekNumber", WEEKNUM([Date])</td>
                            </tr>
                            <tr>
                              <td>Return Year then Month</td>
                              <td>FORMAT([Date], "YYYY/mmm")</td>
                            </tr>
                            <tr>
                              <td>Return Short Month Name</td>
                              <td>FORMAT([Date],"mmm")</td>
                            </tr>
                            <tr>
                              <td>Return Long Month Name</td>
                              <td>FORMAT([Date],"mmmm")</td>
                            </tr>
                            <tr>
                              <td>Return Day of Week (long format)</td>
                              <td>FORMAT([Date],"dddd"),</td>
                            </tr>
                            <tr>
                              <td>Return Day of Week (short format)</td>
                              <td>FORMAT([Date],"ddd"),</td>
                            </tr>
                            <tr>
                              <td>Return Quarter: (Q1)</td>
                              <td>FORMAT([Date],"Q"),</td>
                            </tr>
                            <tr>
                              <td>Return Year Then Quarter: (2017/Q1)</td>
                              <td>FORMAT([Date],"YYYY") &amp; "/Q" &amp; FORMAT([Date],"Q")</td>
                            </tr>
                            <tr>
                              <td>Return Date associated with Week Number (Start Monday)</td>
                              <td>DATE(YEAR([Date]),1,-2) -WEEKDAY(DATE(YEAR([Date]),1,3)) + WEEKNUM([Date])*7,</td>
                            </tr>
                            <tr>
                              <td>Return Date associated with Week Number (Sunday)</td>
                              <td>DATE(YEAR([Date]),1,-2) -WEEKDAY(DATE(YEAR([Date]),1,3)) + WEEKNUM([Date])*7 + 6,</td>
                            </tr>
                          </tbody>
                        </table><br>
                        
                         <p> 
                            The last two rows are useful when you want to group data week over week. While the <em>WEEKNUM</em> function can be used to group your yearly sales by week, it is hard to read. Rather then seeing why sales dropped in say week 16 for year 2016, you can instead see there was a drop on the week of Monday April 18th. You can also change this to Sunday by adding 6, to get week ending on Sunday April 24th.
                        </p>
                    </div>
                    <p>See also:</p>
                         <ul>
                             <li><a href="https://www.youtube.com/watch?v=NDK8YewB1vA" target="_blank">Demo to create Calendar Table</a></li>
                             <li><a href="files/calendarDate_table.txt" target="_blank">Complete Calendar Date Formula</a></li>
                         </ul>
                    
                    <p>Up Next: <a href="modeling_date_functions.php">Handy Date Functions</a></p>
                         
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
