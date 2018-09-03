<?php include "includes/header0.php"; ?>
   
<title>Rank Functions in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Rank Functions | Dash-Intel" />
<meta name="metatitle" content= "Using the rank function in Power BI | Dash-Intel"/>
<meta name="description" content= "Rank function in Power BI returns the ranking order based on the order specified. Use RANKX to evaluate an expression over a table.
">

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
                <h4 class = custom_h4> Statistical Functions</h4><br>
                <h5><em>RANK</em> functions</h5>
                <p>Returns the ranking order.</p>
                <p>There are two types of rank functions.</p>
                <ul>
                    <li>RANK.EQ(value,column,[order])</li>
                    <li>RANKX(table,expresssion,[value],[order],[ties])
                </ul>
                <p>The paramters in square brackets are optional.</p>
                 
                 <h5>RANK</h5>
                 <p>Use when you want to find the rank of a specific value in a particular column.</p>
                <h6>Example:</h6>
                <p>An order quantity for 174,728 units is received. Find the rank of this order in terms of quantity compare to all other order quantities.</p>
                <h6>Answer</h6>
                <p>Deinfe the following measures in Power BI:</p>
                 <pre class="brush:dax; title: ; notranslate" title="">
                      rank_it = RANK.EQ(174728,TransactionData[Quantity])
                      RankQ = SUMX(FILTER(TransactionData,[rank_it]),TransactionData[Quantity])
	            </pre>
               <h6>Power BI Demo:</h6>
                <figure class = "custom_graph_figures">        
                <div class="video-container">
          	        <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZWYwN2IxODYtNzMwYy00MTkyLWI2ZTktMTZkNzJjMjhiYzM3IiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption">
                </figcaption>
                </figure>   
                <p>The measure RankQ returns the quantity associated with the specific rank using a <em>SUMX</em> and <em>FILTER</em> function.</p><br>
                
                
	            
	            
              <h5>RANKX</h5>
              <p>Use to rank items in a table based on an expression.</p>
              <h6>Example:</h6>
              <p>Rank sales revenue by State from 1 to 50.</p>
              
              <h6>Answer</h6>
                <p>Define the following measures in Power BI:</p>
               <pre class="brush:dax; title: ; notranslate" title="">
                 Rank Sales_By_State = RANKX(ALL(states[state]),CALCULATE(SUM(TransactionData[Revenue])))
	            </pre><br>
               
               <h6>Power BI Demo:</h6>
                  <figure class = "custom_graph_figures">        
                <div class="video-container">
                 <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiNzVjMjZjNmMtMGM3ZC00MGIwLWExZTUtNDgwMGM1OTY5NzViIiwidCI6Ijk2YjgyYWIyLTIwNTEtNGNjYy1hMGJmLTRkYWY1YWYwYzEwNyJ9" frameborder="0" allowFullScreen="true"></iframe>
                </div>
                <figcaption class = "custom_figcaption"><br>
                <em>RANKX</em> used to rank sales by state and by product ID. <br>
                Filters in blue let you filter the data by product ID, state and date.
                </figcaption>
                </figure>   

            
        <?php include "includes/footer_0.php"; ?>

       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
