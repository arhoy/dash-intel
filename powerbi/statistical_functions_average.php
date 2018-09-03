<?php include "includes/header0.php"; ?>
  
<title>Average function Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Average Functions| Dash-Intel" />
<meta name="metatitle" content= "Using the average function in Power BI | Dash-Intel"/>
<meta name="description" content= "This demo illustrates the different average functions you can use in Power BI. When to use average vs averagex vs averagea.">
   
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
                <h4 class = custom_h4> Average Functions</h4>
                 <p>
                This demo illustrates different average functions you can write in Power BI. On how to summarize data quickly see <a href="modeling_summarizing.php" target="_blank">summarizing data in Power BI.</a>
                </p>
                <h5><em>Average</em> functions</h5>
                
               <h6>Example Formulas:</h6>
               <p>In the Power BI formula bar define the following measures:</p>
                
                 <pre class="brush:dax; title: ; notranslate" title="">
                  avg_revenue = AVERAGE(TransactionData[Revenue])
                
	            </pre>
              
               
                <pre class="brush:dax; title: ; notranslate" title="">
                  
                 avg_x_revenue = AVERAGEX(TransactionData,TransactionData[Revenue])
                   
	            </pre>
	            
	           <pre class="brush:dax; title: ; notranslate" title="">
                  
                 avg_a_revenue = AVERAGEA(TransactionData[Revenue])
                   
	            </pre>
              
              <p>
              All of these functions return the same result in this instance. This is equivalent to taking the revenue column in your data and selecting <em>average</em> in the dropdown menu. However, only the first does exactly the same operations as described above.
              </p>
              
              
               <h6>Power BI Comparing Formulas Above:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZWI0MWNkOTQtMjAwZS00ZmY0LWE0YWQtYTc0M2E0ZWE1ZjA0IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure><br>
               
               <h5>AVERAGEX:</h5>
              
              <p><em>AVERAGEX</em> Is useful when you need to perform row by row operations to evaluate an expression.</p>
              
              
             
              <h6>Example Formulas:</h6>
              <p>For example the following two measures are equivalent:</p>
              
                <pre class="brush:dax; title: ; notranslate" title="">
                    AverageDifference = AVERAGEX(TransactionData,TransactionData[Revenue] - TransactionData[Cost])
	            </pre>
	            <pre class="brush:dax; title: ; notranslate" title="">
                    Avg Profit per Transaction = DIVIDE([Profit], COUNT(TransactionData[Sales_Id]),0)
	            </pre>
	            <p>Where Profit is a measure defined as:</p>
	             <pre class="brush:dax; title: ; notranslate" title="">
                    Profit = SUM(TransactionData[Revenue]) - SUM(TransactionData[Cost])
	            </pre><br>
	            
	             <h6>AVERAGEX vs DIVIDE and COUNT:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
                
                   <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiN2Y2MzExYmEtZjlhMC00ZTVmLTkxMjQtN2Q5Yzg4NDM4ODIzIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                 
                </div>
                <figcaption class = "custom_figcaption"><br>
                </figcaption>
               </figure><br>
               <h5>AVERAGEA:</h5>
              <p>
                 <em>AVERAGEA</em> is used to handle non-numeric values. For instance, if one of the rows is not a number it will return 0 instead of an error. The way AVERAGEA behaves in POWER BI is currently different then in Excel and the DAX documentation. Below describes how AVERAGEA handles errors in Excel.
                 
              </p>
              <ul>
                  <li>For any row with a text (i.e string) or a blank value, returns 0.</li>
                  <li>For Boolean Values return 1 for True, 0 for False.</li>
              </ul><br>
              <h6>EXAMPLE:</h6>
              <p>The following shows how AVERAGEA handles errors:</p>
              <div class="imae-container">
                  <img src="images/sample%20data.PNG" alt="sampleFruitdata">
              </div><br>
              <p>
              In both cases using the AVERAGEA function on both columns returns the same result. Average apples sold is 2, and average oranges sold is 2 likewise. That is because <em>&#63;</em>  is a string which gets assigned 0, and TRUE is a boolean which  is assigned a 1. 
              </p>
              
               
               
               
            
                
  

            
        <?php include "includes/footer_0.php"; ?>
        
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
