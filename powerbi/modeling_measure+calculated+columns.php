<?php include "includes/header0.php"; ?>
  

<title> Measures and Calculated Columns | Dash-Intel</title>
<meta name="title" content= "Measures and Calculated Columns in Power BI | Dash-Intel" />
<meta name="metatitle" content= "Measures and calculated columns | Dash-Intel"/>
<meta name="description" content= "Measures and calculated columns. When to use measures vs calculated columns and why it is important to distinguish the two.">
   
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
                <h4 class = custom_h4> Calculated Columns and Measures</h4>
                <h5>Intro to Calculated Columns and Measures</h5>
                <p>
                The basics of modeling and the power behind Power BI involves creating new calculated columns and measures. Though sometimes used interchangeably, they get or calculate the data in very different ways. Anytime you do data analysis, you should be questioning whether the obtained result makes sense. If it does not than you most likely should have applied a measure instead of a calculated column or vice versa. There are many articles out there on when to use calculated columns and measures. </p>
                
                <p>To summarize briefly: A calculated column is computed row by row in a table. When you create a calculated column the data lives inside your table. It is calculated row by row. When you like to use this data as a filter or slicer to segment some other data then you should use a calculated column. A calculated column is often used as an intermediate step to obtain a final result. When you want to determine when a particular transaction meets a specific requirment, use a calculated column. <br>A measure is the data that gets sliced or filtered. A measure does not live in your dataset, rather it calculated on the fly when called upon. How is this done? A measure aggregates all the rows in the data and returns the result. A measure changes based on the context of the data and is usually the final value you want to report on. When you want to find total sales amount or ROI use a measure.  
                </p>
                </div>
                
            <div class="whitebox">
                <h5>Creating Calculated Columns and Measures in Power BI</h5><br>
                
                   <figure>        
                        <div class="image-container">
                            <img src="images/new_calculate1.png" frameborder="0" allowFullScreen="true">
                            <figure>Method 1 for creating a new column or "calculated column".</figure>
                            <br><br>
                            
                             <img src="images/new_calculate2.png" frameborder="0" allowFullScreen="true">
                            <figure>Method 2 for creating a new column or "calculated column". <br> A new measure can be created this way as well.</figure><br><br>
                            
                             <img src="images/formula_bar.png" frameborder="0" allowFullScreen="true">
                            <figure>Formula Bar that comes up when you create a new calculated column or measure. <br> The DAX language is used to write simple or complicated expressions for data modeling after you import the data. It is very similar to the formula bar in Excel.</figure><br><br>
                            
                             <img src="images/new_calculate3.png" frameborder="0" allowFullScreen="true">
                            <figure><br>Note the difference in the symbols used. <br> A calculated column has a table with a small sigma (greek letter) as its icon. <br> A measure has the icon of a calculator.</figure>
                        </div>

                    </figure>
                </div>
                  
                  <div class="whitebox">
                   <h5>Using Calculated Columns</h5>
                
                    <p>
                        A calculated column is a new column that is created in POWER BI from two or more existing columns. It is calculated row by row in the data table. A calulated column is often used in conjugation with slicers to filter or segment your data for analysis. That is we create a calculated column to act as a filter that we can later use. Another reason to create a calculated column is if you like to have the data stored in the dataset. For instance, say you a column that shows the value of cost. A new calcuated column, "Cost after Taxes" could be made using the original "Cost" column. 
                     </p><br>
                     
                  </div> 
                    
                 <div class="smokebox">
                     <p>Example: Add a calcuated column to account for costs after tax. In the formula bar write:</p>
                     <pre class="brush:dax; title: ; notranslate" title="">
                         Cost after Taxes = TransactionData[Cost]*(1.07)  
	                 </pre>
                   <ul>
                       <li><em>TransactionData</em> is the table used</li>
                       <li><em>Cost</em> is the column in that table. A column name must always be enclosed in square brackets</li>
                       <li></li>
                   </ul>
                   
           
                   <p>In the example above, each row in the <em>Cost</em> column was evaluated and mutliplied by the corresponding tax rate of 7%. Since this is a calculated column you can see each result row by row in <em>data view</em> found under <em>manage relationships.</em><br> This will not change the original data set (ie. the data set you are using). In order to do that, you need to make changes in the query editor itself. 
                   </p>
                   
                   <img src="images/views_data.png" frameborder="0" allowFullScreen="true">
                            <figure>arrow pointing to "data view"
                            </figure><br> 
                </div>
                   
                <div class="smokebox">
                    <p>Example: Define a calculated column to check for large transactions. In the formula bar write:</p>
                      <pre class="brush:dax; title: ; notranslate" title="">
                      Large Transactions = IF(TransactionData[Revenue] > 10000,
                           "revenue from large transactions","revenue from all other transactions")   
	                 </pre>
                    <p>This will check row by row for each transaction to see if it was greater than 10,000. If so the first result: "revenue from large transactions" will be the result of that row.</p>
                </div>
                     
                <div class="whitebox">
                <h5>Using Measures</h5>
                    <p>
                        A measure is sometimes incorrectly confused or used interchangeablly with a calculated column.  However, unlike calculated columns, a measure is not stored in the table and therefore should NOT be used as a filter. In a measure, calculations are made on the fly by aggregating all the rows in a column and returning the result whenever called upon. Anytime you need to compute ratios, such as AOV (average order value) or ROI (return on investment) you should be creating a new measure. Using a calculated column in such cases will give you the wrong results. In summary, if you want to find the calculation for a value and report that number, you should be creating a measure. 
                    </p>
                </div>
                <div class="smokebox">
                 <p>Example: Writing your first measure. In the formula bar write:</p>
                      <pre class="brush:dax; title: ; notranslate" title="">
                      Measure_for_Cost = SUM(TransactionData[Cost])  
	                 </pre>
                   <img src="images/m.cost.png" frameborder="0" allowFullScreen="true">
                   <br> <p>
                        This creates the simplest possible measure above. We are summing up ( <a href="">aggregarting</a> ) all the cost rows in our data. In fact, Power BI will automatically do this for us with all columns having the following symbol:
                    </p>
                     <img src="images/cost_snippet.png" frameborder="0" allowFullScreen="true">
                     <figure>This symbol ( a large sigma ) stands for summation. We know a measure aggregates values, and a summation is a type of aggregration. </figure>
                     <p>
                         The measure created above <em>Measure_for_Cost</em> will be identical to the Cost column in every possible context. Why create a measure then? If we have cost data and revenue data, but are missing <em>Profit</em> or <em>ROI</em> then we can use these columns to create a new measure. We can then visually display these new measures in Power BI and filter them if needed using calculated columns or other <a href="">dimensions</a>.
                     </p>
                     <p>For example using the <a href="modeling_dividefunction.php" target="_blank">divide function</a>:</p>
                     
                      <pre class="brush:dax; title: ; notranslate" title="">
                         ROI = DIVIDE(
                         
                                 SUM(TransactionData[Total Profit]),
                                 SUM(TransactionData[Cost (total)]),
                                 0
                                  )
	                </pre><br>
	           </div>
	           <div class="smokebox">
            
                <h5>Two Illustrative Examples</h5>
                  <h6>Example 1</h6>
                   
                   <p>A calculated column and measure was created using two identical formulas:</p>
                   
                   <pre class="brush:dax; title: ; notranslate" title="">
                        Calculated Column Revenue = SUM(TransactionData[Revenue])
	                </pre>
                   <pre class="brush:dax; title: ; notranslate" title="">
                        Actual Revenue = SUM(TransactionData[Revenue])
	                </pre>
	                
                  <p>
                      Yet there outputs were quite different when I plot the results on a bar graph. Can you figure out why? In this sample data, the actual total revenue for all the data is about &dollar;67.6 million. The calculated column revenue shows a staggering 4 trillion in revenue! (note that is still much less than the <a href="http://www.usdebtclock.org/" target="_blank">US National Debt</a>.) If you go into "data view" you will see the results of "Calculated Column Revenue". It gave you what you asked, the sum of all transcations. In this case each row is a static value of 67.6 million. However, when you go into "Report View" and plot the result, it returns an aggregation of all the rows with &dollar;67.6 million. With this sample data set there is 60,516 rows of data. In otherwords, <span class="equation">&dollar;67.6 million x 60,516 	&asymp; 4T</span>.
                   
                  </p>
                 </div>
                <div class="smokebox">
                   <h6>Example 2</h6>
                    <p> 
                    Below outlines an example of when you should be using measures. The final value or result you want to look at should be defined as a measure. When calculating ratios, measures need to be used.  In this case, the reason to use measures is becauses a measure will aggregrate the total data while calculated columns do not. </p>
                    <p> For example see the three sales records below:</p>
                     
                     <table class="table table-hover table-bordered custom_thead">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <col style="width:25%">
                          <thead>
                            <tr>
                              <th>Customer Name</th>
                              <th>Total Orders</th>
                              <th>Sales Amount</th>
                              <th>AOV</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbody">
                            <tr>
                              <td>Anna</td>
                              <td>1</td>
                              <td>&#36;1</td>
                              <td>&#36;1</td>
                            </tr>
                            <tr>
                              <td>Bob</td>
                              <td>2</td>
                              <td>&#36;5</td>
                              <td>&#36;2.5</td>
                            </tr>
                            <tr>
                                <td>Cat</td>
                                <td>1</td>
                                <td>&#36;4</td>
                                <td>&#36;4</td>
                            </tr>
                          </tbody>
                        </table>
                        
                    <p>Here we can see that the total sales amount for all of our Candy Store customers is $$&#36;1+&#36;5+&#36;4 = &#36;10
                       The row by row average order value is also computed. Bob has two orders (He came to the candy store this week and last week, then never came back), while Anna and Cat each came to the candy store once. In this case the true AOV is: </p>
                       
                       $$\frac{\sum sales}{\sum orders} = \frac{1 + 5 + 4}{1 + 2 + 1} = \$2.5 $$
                       
                    <p>
                     If you try to compute this in POWER BI using a calculated column it will actually return: </p>
                     $${\sum{\frac{sales}{orders}}} = 1 + 2.5 + 4  =  \$7.5 $$
                                                                    
                     <p>Try for yourself! Taking an average of the AOV is also not right. In otherwords:</p>
                     $$\frac{\sum metric1}{\sum metric2} \neq \sum{\frac{metric1}{metric2}}$$
                </div>
                   
                   
                   <div class="whitebox">
                    <h5>Summary of Difference Between Calculated Column and Measure</h5>  <br>        
                      <table class="table table-hover table-bordered custom_thead">
                          <col style="width:50%">
                          <col style="width:50%">
                          <thead>
                            <tr>
                              <th>Calculated Columns</th>
                              <th>Measures</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbodyi">
                            <tr>
                              <td>Uses up more memory since it is stored in a table</td>
                              <td>Calculated on the fly. Uses more CPU therefore may be slower. </td>
                            </tr>
                            <tr>
                              <td>Used with slicers to filter and segment data</td>
                              <td>Used to calculate the final numeric value</td>
                              
                            </tr>
                            <tr>
                                <td>Row by row calculation is involved for all rows in the table</td>
                                <td>All rows in the column aggregaged and returned. No individial row by row calculation</td>
                            </tr>
                            <tr>
                                <td>SUM(metric1/metric2) = $\sum{\dfrac{metric1}{metric2}}$</td>
                                <td>SUM(metric1)/SUM(metric2) = $\dfrac{\sum metric1}{\sum metric2}$</td>
                            </tr>
                          </tbody>
                        </table>

                      <p>See also: <a href="https://www.youtube.com/watch?v=MOzrtFTU_wc&feature=youtu.be" target="_blank">Video on creating measures and calculated columns.</a></p> 

            </div> 
            <p>Up Next: <a href="modeling_calculate.php">The CALCULATE function.</a></p>
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
