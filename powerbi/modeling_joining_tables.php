<?php include "includes/header0.php"; ?>
  
<title>Joining Tables in Power Bi | Dash-Intel</title>
<meta name="title" content= "Joining Tables | Dash-Intel" />
<meta name="metatitle" content= "Joining Tables Power Bi | Dash-Intel"/>
<meta name="description" content= "Learn how to join tables together in Power BI under the relationships view. In this view you can join multiple tables to create an iedal star like data model as shown in the figure above.">
   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include_once("../includes/utils/analyticstracking.php") ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php include "../includes/header/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
       <!-- Left Side Bar/Navigation-->
       <?php include "includes/left_nav.php"; ?>
           
            
        <!--Main Content-->
        
          
          <h2 class = "custom_more_margin" id = "pb_modeling">POWER BI - Modeling</h2>
           <div class="whitebox">
            <h4>Joining Tables</h4>
             <h5>The Basics:</h5>
                  <p>
                       When modeling in Power BI we don't need to have just one big "flat" table with all our data. In Power BI, it is very easy to create relationships between tables, and Power BI will automatically try to detect relationships between tables if any exists. Though it's best to check the relationships or create them yourself so that you understand which columns are connecting two tables together and that you don't have any loops. See image below showing the adventure works sample database: 
                  </p>
                  
               <figure class = "custom_graph_figures">  
                    <div class="video-container">
                         <iframe width="800" height="600" src="images\contoso_simple.jpg" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                      <figcaption class = "custom_figcaption">
                        Simple example of joining tables together in Power BI. 
                     </figcaption>
                  </figure><br>
                  
                    <p>
                       This is under the "Relationships View" in Power BI. To get here click the icon the red arrow is pointing to. This model is referred to as a star-like data model. We have Our <em>Sales</em> Table right in the middle. The <em>Sales</em> table is connected to the <em>Store</em> table, the <em>Customer</em> table, the <em>Product</em> and the <em>Date</em> table. The reason it is called a star is because you have these branches (other tables) that come out from a central table (in this case the <em>Sales</em> table). It is good practice to have your data arranged this way to keep thing more manageable and organized.
                   </p>
                     <p>
                       To connect these tables together, we simply take the common columns in each table and join them together by selecting, dragging and dropping (similar to playing connect the dots).
                   </p>
                   
                     <p>
                        The productKey column in the <em>Product</em> table is connected to the productKey column in the <em>Sales</em> Table. Similarly, the <em>Sales</em> table and <em>Date</em> table are being joined together by the orderdateKey and the datekey columns. Columns that join tables together in this way are generally referred to as <a href="">foreign keys</a> and <a href="">primary keys</a> respectively.
                   </p>
                   <p>
                        Notice that the tables are joined by a <em>*</em> on one side and a <em>1</em> on the other. This is called a many to one relationship. For instance, in the product table we have 2517 unique products and 2517 rows (all identified by a specific productkey). In the sales table, we have over 12.5 million rows. In the sales table, we also have a product Key column but it is not unique. (i.e we have multiple rows with the same productKey). This is what is meant by a many to one relationship. The product Key column in the <em>Products</em>table is called the primary key, while the product key column in the <em>Sales</em> table is referred to as the foreign key.
                   </p>
                </div>
                
                <div class="whitebox">
                 <h5>An Example:</h5>
                  <figure class = "custom_graph_figures">  
                    <div class="video-container">
                         <iframe width="800" height="600" src="images\contoso_modeling_e.jpg" frameborder="0" allowFullScreen="true"></iframe>
                    </div>
                      <figcaption class = "custom_figcaption">
                        More realistic example of relationships between databases.
                     </figcaption>
                  </figure><br>
                  
                       <p>
                   In this case the <em>Sales</em> table is still the center dataset, but other tables further join additional tables. Notice the three tables:  
                   </p>
                       <ul>
                           <li>Product Category</li>
                           <li>Product Subcategory</li>
                           <li>Product</li>
                       </ul>
                       
                <p> Together they form what is called a hierarchy. Each product category has several or sometimes many subcategories. In turn, each subcategory has many products. It is the <em>Product</em> table that is being joined with the <em>Sales</em> table since a customer will be purchasing specific products. Having data structured this way makes things much more organized, and Power BI can readily exploit data structured in this way with it's powerful <a href="references_powerbi_desktop.php#data_drill" target="_blank">data drill</a> feature.</p><br>
                
            </div>
                
                 <p>Up Next: <a href="modeling_measure+calculated+columns.php">Creating calculated columns and measures.</a></p>
                
            <?php include "includes/footer_0.php"; ?>
           </div>
              
                   
                 
       


        <!-- Ads will go here or link to other pages -->
    <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
