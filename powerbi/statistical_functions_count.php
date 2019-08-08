<?php include "includes/header0.php"; ?>
  
  <title>Count Functions in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Count Functions | Dash-Intel" />
<meta name="metatitle" content= "Count functions in Power BI | Dash-Intel"/>
<meta name="description" content= "Different types of count functions in power bi and examples of how to use them.">
   
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
                <h4 class = custom_h4> Counting Functions</h4>
                 <p>
                This demo illustrates the different count functions you can write in Power BI. On how to summarize and count data without DAX visit: <a href="modeling_summarizing.php" target="_blank">summarizing data in Power BI.</a>
                </p>
                <h5><em>COUNT</em> function</h5>
                <p>Counts up all the rows in a given column</p>
                
                <h6>Example Formula:</h6>
                <p>Define a measure to count all sales transactions:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                    number of sales = COUNT(TransactionData[Sales_Id])
	            </pre>
	            <p class = "alert alert-info"><strong>Note:</strong> It will not count blank or empty rows.</p>
	            
	             <h5><em>COUNTA</em> function</h5>
                <p>Counts up all the rows in a given column.</p>
                
                <h6>Example Formula:</h6>
                <p>Define a measure to count all sales transactions:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                    number of sales = COUNTA(TransactionData[region])
	            </pre>
	            <p class = "alert alert-info"><strong>Note:</strong> It will not count blank or empty rows. Use COUNTA for text data types.</p>
	            
	           <h5><em>COUNTX</em> function</h5>
                <p>Counts up the number of rows in an expression, evaluated over a table.</p>
                
                <h6>Example Formula:</h6>
                <p>Define a measure to count all sales transactions with revenue > $1000:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                    Number of sales w/ revenue > 1000 =         
                                        COUNTX(
                                        FILTER(TransactionData,TransactionData[Revenue] > 1000),
                                        TransactionData[Revenue])
	            </pre><br>
	            <ul>
                    <li>A FILTER function is needed created a temporary table with transactions greater than 1000 </li>
	                <li>The Expression used is the last line <em>TransactionData[Revenue]</em></li>
	            </ul><br>
	            <p class = "alert alert-info"><strong>Recall:</strong> Functions with an X at the end, have a <em>table</em> as the first parameter and an <em>expression</em> as the second parameter.</p>
	            
	             <h5><em>COUNTAX</em> function</h5>
                <p>Counts up the number of rows in an expression, evaluated over a table. Use with non-numeric data</p>
                
                <h6>Example Formula:</h6>
                <p>Define a measure to count all rows where Ad Budget is "small" and Ad Source is "radio" in the advertising table:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                 CountData  = COUNTAX(
                         FILTER(
                           Advertising,
                           Advertising[Ad Budget] = "small" &amp;&amp; Advertising[Ad Source] = "radio"),
                           Advertising[Ad Budget])
	            </pre><br>
	            <ul>
                    <li>A FILTER function is needed created a temporary table (aka table expression) with only small and radio ads.</li>
	                <li>The Expression used is the last line <em>TransactionData[Revenue]</em></li>
	            </ul><br>
	            
	                <h5><em>COUNTBLANK</em> function</h5>
                <p>Counts up the number of rows in a given column, where the rows are empty.</p>
                
                <h6>Example Formula:</h6>
                 <pre class="brush:dax; title: ; notranslate" title="">
                   COUNTBLANK = COUNTBLANK(TransactionData[Region])
	            </pre><br>
	            
	           <h5><em>COUNTROWS</em> function</h5>
                <p>Counts up the number of rows in a table</p>
                
                <h6>Example Formula:</h6>
                 <pre class="brush:dax; title: ; notranslate" title="">
                   count sales = COUNTROWS(TransactionData)
	            </pre><br>
	            <h6>Power BI Demo:</h6>
	            
	             <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                   <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMzE2YTE5NTMtN2M0YS00YzQ2LWEzZTYtMjI4MmUwZGVmNDc4IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                   
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure><br>
               
               <p>The above graphs gives an example on how you can apply COUNTROWS to extract valuable business information.
               </p>
               <h6>How to Make:</h6>
               <ul>
                   <li>Select Matrix Visualization</li>
                   <li>Drag <em>count sales</em> measure created above in to <em>Values</em></li>
                   <li>Drag <em>product type</em> into Rows</li>
                   <li>Drag <em>product id</em> into Columns</li>
               </ul><br>
	            
	   
	            
            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
