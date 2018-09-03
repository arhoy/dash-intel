<?php include "includes/header0.php"; ?>
  
<title>Calculate function in Power BI | Dash-Intel</title>
<meta name="title" content= "Calculate function in Power Bi | Dash-Intel" />
<meta name="metatitle" content= "The power of Calculate in Power Bi | Dash-Intel" />
<meta name="description" content="The calculate function in Power Bi evaluates an expression that is modified by filters .">

   
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
                <h5>The <em>CALCULATE</em> Function</h5><br>
                 <p> <strong>SYNTAX:</strong> CALCULATE(<em>expression</em>,<em>filter</em>)</p>
                  <p>
                      A very useful function is the <em>calculate</em> function. It evaluates an expression which is then modified by filters. You can add any number of filters to the function. 
                 </p>
                 
                 <p> The calculate function can change the context in which the data is filtered. The expression you specify is evaluated using the filter arguments given to the function. 
                 </p>
            </div>
            
            <div class="smokebox">
                <h5>Example</h5>
                 <p>Use the <em>CALCULATE</em> function to sum transactions with revenue greater than $10,000.</p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
            Large Transactions = CALCULATE(
                                     SUM(TransactionData[Revenue]),
	                                 TransactionData[Revenue] > 10000
	                            )
                </pre>
            
                     
                 <p> The first argument in the calculate function is the <em>Expression</em> that we want to return. After that we can add any number of optional <em>Filter</em> parameters. 
                    In this example:
                </p>
                   <ul>
                       <li><em>SUM(TransactionData[Revenue])</em> is the expression that gets returned.</li>
                       <li><em>TransactionData[Revenue] > 10000</em> is the filter</li>
                       <li></li>
                   </ul>
                    
                <p></p>
                    
                <p>
                Note that the filter columns are not limited to the same table. We can use columns from another table if needed. Just make sure you are using the correct syntax:
                </p>
                <ul>
                    <li><em>'TableName'[ColumnName]</em></li>
                </ul> 
                
                <p>It is optional to have quotations around the table name, ie. <em>TransactionData</em>. However, columns must always be surrounded by square brackets.  
                </p><br>
                
                </div>
                <div class="smokebox">
                <h5>Multiple Filter Parameters:</h5>
                 
                <p>The example below returns large transactions with medium ad budget: </p>
                 
                 <pre class="brush:dax; title: ; notranslate" title="">
                 Large Transactions &amp; Mid_Budget = CALCULATE(
                                                 SUM(TransactionData[Revenue]),
	                                             TransactionData[Revenue] > 10000, 
	                                             Advertising[Ad Budget] = "medium" 
	                                            )
	            </pre>
                  
                 <p>In this case the filters are:</p>
                 <ul>
                     <li><em>TransactionData[Revenue] > 10000</em></li>
                     <li><em>Advertising[Ad Budget] = "medium"</em></li>
                 </ul>
                 
                 <p>
                     Note that the filters came from different tables. One filter from the <em>TransactionData</em> table and the other from <em>Advertising.</em> The two filters together results in an expression that returns revenue for large transactions and mid size ad spend. 
                 </p>
                  <p class = "key-concept">
                  Remember, filters act like <em>AND</em> conditions.
                  </p><br>
                  </div>
                  
                  <div class="smokebox">
                  <h5>Using <em>CALCULATE</em> with OR conditions:</h5>
                  
                  <p>
                  Although multiple filter parameters act like <em>AND</em> conditions it is also possible to "create" <em>OR</em> conditions in a <em>CALCULATE</em> expression.
                  </p>
                  <p>The example below returns revenue with transactions greater than $10,000 for small of mid size ad spend:</p>
                  
                  <pre class="brush:dax; title: ; notranslate" title="">
                  Large Transactions &amp; mid_or_small Spend  = CALCULATE(
                                                     
                     SUM(TransactionData[Revenue]),
	                 TransactionData[Revenue] > 10000, 
	                 Advertising[Ad Budget] = "medium" || Advertising[Ad Budget] = "small"
	                 )
                 </pre>
                 
                <a href="modeling_calculate_ex1.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a><br>
                
                 <p> There is only two filters:</p>
                     <ul>
                         <li><em>TransactionData[Revenue] > 10000</em></li>
                         <li><em>Advertising[Ad Budget] = "medium" || Advertising[Ad Budget] = "small"</em></li>
                     </ul>
                  
                   
                   <p> But inside the second filter we are using the <em>OR</em> operator to select both small or medium size companies. (recall the || symbol is the <em>OR</em> operator). If I used &amp;&amp; (<em>AND</em> operator) instead or had three filters, then the CALCULATE function would return 0. That is because in this data set you cannot have companies that are both small and midsize at the same time. </p><br>
            </div>       
            
            <div class="smokebox">
            <h5>Using <em>CALCULATE</em> with ALL:</h5>
            
             <p>
             With any of the examples above, adding in slicers in the POWER BI canvas would further filter the data. However, it is possilbe to override the slicer commands using <em>CALCULATE</em> together with the <em>ALL</em> function. This could be useful when you don't want to filter the data any further for a particular slicer or when you want to calculate ratios and percentages.
             </p>
             
             <p>The example below shows how to override the slicer command for a specific column:</p>
            
            <pre class="brush:dax; title: ; notranslate" title="">
                   Revenue from All_Regions = CALCULATE(
                              
                               SUM(TransactionData[Revenue]),
                               ALL(TransactionData[Region])
                               )
	        </pre>
                              
               <p>
               If there is a slicer for the region column in the TransactionData table, then the slicer will be ignored and the full revenue amount will be returned.
             </p><br>                   
              <p> The example below will override the filters for any column in the Advertising table</p>
                 
            <pre class="brush:dax; title: ; notranslate" title="">
                     All_Ad_Revenue = CALCULATE(
                                
                                 SUM(TransactionData[Revenue]),
						         ALL(Advertising)
						         )    
	        </pre>
           <p>
               This will ignore all filters from slicers made from the columns in the Advertising table. However, slicers made from columns in another table will still be filtered. You can filter out as many columns or tables as you like using <em>ALL</em>. Just add them as additional filters. 
           </p><br>
            
          <p>
               The easiest way to return total revenue regardless of the filters applied is using ALL on the TransactionData table
          </p>
            <pre class="brush:dax; title: ; notranslate" title="">
                     Total Revenue = CALCULATE(
                                
                                 SUM(TransactionData[Revenue]),
						         ALL(TransactionData)
						         )    
	        </pre>
            <p></p>
                  
             <p>
                 If there is a slicer for any column in the TransactionData table, then the slicers will all be ignored, and the total revenue will be returned. Note that if there is a slicer made from another column in a <em>different</em> table, that slicer will still be able to filter the data.  
             </p>
             
          
            <a href="modeling_calculate_ex2.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a>
              </div>
              
            <div class="smokebox">
              <h5>Using<em> CALCULATE</em> for percentages</h5>
          
              <p>This example shows the ratio of large transactions by Ad Source.</p>
              <pre class="brush:dax; title: ; notranslate" title="">
                     % of Large Transactions By Ad Source = DIVIDE(
                     
	                CALCULATE(SUM(TransactionData[Revenue]),TransactionData[Revenue] > 10000),
	                CALCULATE(SUM(TransactionData[Revenue]),TransactionData[Revenue] > 10000, ALL(Advertising[Ad Source])),
	                0) 
	        </pre>
             <a href="modeling_calculate_ex3.php" class="btn btn-info try_it_out" role="button" target="_blank">Try It Out</a><br><br>
       </div>
       <div class="whitebox">
              <h5>SUMMARY:</h5>
              <p><em>CALCULATE</em> is an essential DAX function that changes the filter context. This allows powerful expressions to be created, especially when used together with statistical or time-intelligence functions.  </p>
              <table class="table table-hover table-bordered">
                          <col style="width:50%">
                          <col style="width:50%">
                          <thead class = "custom_thead">
                            <tr>
                              <th>CALCULATE function filter</th>
                              <th>Description</th>
                            </tr>
                          </thead>
                          <tbody class = "custom_tbodyi">
                            <tr>
                              <td><em>TableName[ColumnName] = "value"</em></td>
                              <td><em>CALCULATE</em> returns data specified for the colum name and value. Other column filters from <em>slicers</em> can still change the meaure.</td>
                            </tr>
                            <tr>
                              <tr>
                              <td><em>ALL(TableName[ColumnName])</em></td>
                              <td><em>CALCULATE</em> returns all of the data specified for the colum name. The same column filter from a slicer will NOT change the measure </td>
                            </tr>
                            <tr>
                              <td><em>ALL(TableName)</em></td>
                              <td><em>CALCULATE</em> returns all of the data specified for the entire table. Any other filters from this table will NOT change the measure </td>
                            </tr>
                          </tbody>
                        </table>

              <p class = "alert alert-info">
                  <strong>Important:</strong> <em>filters</em> created in <em>CALCULATE</em> will override any filters created on the canvas from the slicers.
              </p>
         </div>
            <p>Up Next: <a href="modeling_logic.php">Using Logic</a></p><br>
            
            
        <?php include "includes/footer_0.php"; ?>
            
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
