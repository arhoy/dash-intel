<?php include "includes/header0.php"; ?>
  
<title>Customer Aquisition Using LOD Expressions | Tableau</title>
<meta name="title" content= "Customer Aquisition Using LOD Expressions in Tableau | Dash-Intel" />
<meta name="metatitle" content= "Customer Aquisition Using LOD Expressions| Dash-Intel" />
<meta name="description" content="Customer Aquisition Using LOD Expressions summary in Tableau.">

   
   
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
       
       
       
       
       
       
       
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
