<?php include "includes/header0.php"; ?>
  
<title>Date Calculations in Tableau</title>
<meta name="title" content= "Date Calculations in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Date Calculations| Dash-Intel" />
<meta name="description" content="Date Calculations summary in Tableau.">

   
   
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

           
    <h2 class = "custom_more_margin">Tableau - LOD Expressions</h2>
    
    <div class = "sub_section_navigation">
  <ul>
    <a href="./lod_tableau_intro.php">LOD Basics |</a>
    <a href="./lod_customer_order_frequency_in_tableau.php">Customer Order Frequency</a><br>
    <a href="./lod_customer_aquisition.php">Customer Aquisition |</a>
     <a href="./lod_customer_cohort_in_tableau.php">Customer Cohort |</a>
    <a href="./lod_percentage_of_total_sales_in_tableau.php">Percentage of Total</a><br>
    <a href="./lod_sales_tracker_in_tableau.php">Sales Tracker |</a>
    <a href="./lod_target_calculations.php">Target Calculations</a>
  </ul>              
  </div>
       
       
       
                   
<!--Customer Aquisition-->
        <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Customer Aquisition with LOD Expressions </h2>
                
              <p>The task is to show customer growth over time for different regions on the macro and micro level.</p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new LOD <em>calculated field</em> in Tableau called "First Purchase Date" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {FIXED [Customer ID]: MIN([Order Date])}
                 </code></pre>
                 </div>
                 
        <p><strong>Step 2: </strong>Create a <em>calculated field</em> in Tableau called "Customer Type" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                IF [First Purchase Date] = [Order Date] THEN 'new' ELSE 'existing' END
                 </code></pre>
                 </div>
                 
 
          <p><strong>Step 3: </strong>Add "First Purchase Date" to the column shelf, "Customer ID" to the row shelf and "Customer Type" to Filter. Filter only on "new"  </p>
          
          <p><strong>Step 4: </strong>For YEAR(First Purchase Date) in the Columns shelf, right click and select the Quarter (the continuous one above week number).
          </p>
          <ul>
              <li>Calculation Type: Percentage of Total</li>
              <li>Compute using: Table (down)</li>
          </ul>
          
            <p><strong>Step 5: </strong>Right click on "Customer ID" in the Rows shelf and select: </p>
            <ul>
                <li>Measure -> Count (Distinct)</li>
                <li>Quick Table Calculation -> Running Total</li>
            </ul>
            <p><strong>Step 6: </strong>Drag Market to Color</p><br>
        </div>
        
           <h3>Adding Drill Down Features</h3><br>
                  
       <p><strong>Step 7: </strong>Rename the current sheet to <em>Market View</em> and right click and duplicate sheet. Change the new sheet name to <em>Country View.</em> Duplicate again and rename to <em>State View</em> </p>
         <p><strong>Step 8: </strong>In <em>Country View</em> drag "Country" to color and in <em>State View</em> drag "State" to color.
         </p>
         
         <p><strong>Step 8: </strong>In "Market View" select Worksheet and Actions. Add action as a <em>filter action</em> and in the pop up menu: </p>
         <ul>
             <li>Name: Market to Country</li>
             <li>Source Sheets: Market View</li>
             <li>Target Sheets: Country View</li>
             <li>Run Action on: Select and run on single select only</li>
             <li>Clearing Section will: Leave the filter</li>
             <li>Target Filters: Selected Fields -> Add Filter with Source and Target Field being <em>Market</em> </li>
         </ul>
         
                <p><strong>Step 9: </strong>In "State View" select Worksheet and Actions. Add action as a <em>filter action</em> and in the pop up menu: </p>
         <ul>
             <li>Name: Country to State</li>
             <li>Source Sheets: Country View</li>
             <li>Target Sheets: State View</li>
             <li>Run Action on: Select and run on single select only</li>
             <li>Clearing Section will: Leave the filter</li>
             <li>Target Filters: Selected Fields -> Add Filter with Source and Target Field being <em>Country</em> </li>
         </ul>
<p class = 'alert-success'><strong>Tip:</strong> When creating a Dashboard you can create similar <em>action filters</em>. Similar Actions need to be recreated at the dashboard level. (ie. Dashboard -> Actions tab up top.) Similarily, create three separate dashboards using Market View, Country View and State View sheets.</p>
</div>
      
             
                    
      <!--Customer Cohort-->
        <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Customer Cohorts </h2>
                
              <p>The Task is to find the % of sales each year from new and old customers</p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new LOD <em>calculated field</em> in Tableau called "First Purchase Date" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {FIXED [Customer ID]: MIN([Order Date])}
                 </code></pre>
                 </div>
 
          <p><strong>Step 2: </strong>Add "OrderDate" to the column shelf, "First Purchase Date" to color and "Sales" to the row shelf  </p>
          
          <p><strong>Step 3: </strong>For SUM(Sales) in the row shelf, right click and select <em>Add Table Calculation</em> with the following options:</p>
          <ul>
              <li>Calculation Type: Percentage of Total</li>
              <li>Compute using: Table (down)</li>
          </ul>
        </div>
    <p>You can now see the percentage of sales for each customer cohort.</p>
    <p><strong>Tip: </strong>To get a more granular view of sales, expand YEAR(Order Date) to view order dates by quarter and month. </p>
</div> 
      
            
                  
   <!--Customer Order Frequency-->
         <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Customer Order Frequency </h2>
                
                  <p>The task is to count the number of customers who have made 1 order, 2 orders and so on.</p>
               <div class="tableau_steps">   
            <p><strong>Step 1: </strong>Create a new <em>calculated field</em> in Tableau called "Orders By Customer" and type</p>
              <div class="lesson_example">
                    <pre><code class="language-tableau">
                    {FIXED [Customer Name] : COUNTD([Order ID])}
                     </code></pre>
                     </div>
             <p><strong>Step 2:</strong> Drag "Orders By Customer" to Columns and "Customer Name" to Rows</p>
             <p><strong>Step 3:</strong> Right click "Customer Name" and select <em>Measure -> Count (Distinct)</em></p>
             <p><strong>Step 4:</strong> Right click "Orders By Customer" and select <em>Dimension</em></p>
             <p><strong>Step 5:</strong> Right click "Orders By Customer" and select <em>Discrete</em></p>
             <p><strong>Step 6:</strong> Right click "Orders By Customer" and select <em>Sort</em></p>
             <p><strong>Step 7:</strong> Sort Order Descending and Sort By Field "Customer Name with Aggregration as Count (Distinct)</p>
             <p><strong>Step 8:</strong> Edit the tool tip by clearing the default and replacing with:</p>
                   <div class="lesson_example">
               <pre><code class="language-tableau">
                    &lt;CNTD(Customer Name)&gt; customers have made &lt;Orders By Customer&gt; orders
                     </code></pre>
                     </div>
            </div>
        </div>   
        

        <!--% of Total Sales in Tableau-->
         <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - Calculating % Of Total Sales </h2>
                
             <p>The task is to find the percentage of total sales by region. There are two ways to do this in Tableau.</p>
        <p><strong>Method 1 (LOD Expression):</strong></p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new <em>calculated field</em> in Tableau called "All Sales" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {SUM([Sales])}
                 </code></pre>
                 </div>
         <p><strong>Step 2:</strong> Create a new <em>calculated field</em> called "% of Total" and type</p>
           <div class="lesson_example">
                <pre><code class="language-tableau">
                 [Sales]/[All Sales]
                 </code></pre>
                 </div>
         <p><strong>Step 3:</strong> Right click "% of Total" and select <em>Default Properties -> Number Format -> Percentage</em></p>
         <p><strong>Step 4:</strong> Drag "Region" to rows and "% of Total" to rows</p>
        <p><strong>Step 5:</strong> Sort Order Descending and Sort By Field "Sales" with Aggregration as Sum</p>
        </div><br>
       
        
        <p><strong>Method 2 (Quick Table Calc):</strong></p>
        <div class = "tableau_steps">
                <p><strong>Step 1:</strong>Drag "Region" and "Sales" to Rows</p>
                <p><strong>Step 2:</strong>Right click on "Sales" and select <em>Quick Table Calculation -> Percentage of Total</em> </p>
                <p><strong>Step 3:</strong> Sort Order Descending and Sort By Field "Sales" with Aggregration as Sum</p>
        </div>
        
         </div>  
       
          <!--Sales Tracker Tableau-->
         <div class="custom_color_box">
            <h2 class = "custom_more_margin">Tableau - LOD Sales Tracker </h2>
               
                             <p>The Task is to create a Sales Per Day Tracker with high, medium and low sales days</p>
        <div class="tableau_steps">
        <p><strong>Step 1: </strong>Create a new LOD <em>calculated field</em> in Tableau called "Sales Per Day" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                {FIXED [Order Date]: SUM([Sales])}
                 </code></pre>
                 </div>
       <p><strong>Step 2: </strong>Create a new LOD <em>calculated field</em> in Tableau called "Sales Per Day" and type</p>
          <div class="lesson_example">
                <pre><code class="language-tableau">
                   IF [Sales Per Day] > 3000 THEN 'high'
                   ELSEIF [Sales Per Day] > 2000 THEN 'medium'
                   ELSE 'low'
                   END
                 </code></pre>
          </div>
          <p><strong>Step 3: </strong>Add "OrderDate" to the both the row and column shelf and "Sales Tracker" to color shelf and row shelf </p>
          
          <p><strong>Step 4: </strong>For "OrderDate" in the row shelf, right click and select <em>measure->Count (Distinct)</em></p>
          <p><strong>Step 5: </strong>Expand YEAR(OrderDate) on the row shelf to show quarters</p>
          <p><strong>Step 6: </strong>On the right hand side, reorder the legend by clicking and dragging to show high, medium and low</p>
          <p><strong>Step 7: </strong>Set the marks type to Bar or Area chart.</p>
          
       
               
            </div>
        </div>
           
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
