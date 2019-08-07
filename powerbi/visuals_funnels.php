<?php include "includes/header0.php"; ?>
  
  <title>Funnels in Power BI | Dash-Intel</title>
<meta name="title" content= "Power BI Funnels | Dash-Intel" />
<meta name="metatitle" content= "Funnels in Power BI | Dash-Intel"/>
<meta name="description" content= "Funnel visuals in power bi let you analyze a series of actions taken by the user to better understand what steps a user takes before a conversion or sale.">
   
   
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
       
             <h2 class = "custom_more_margin" id = "pb_intro" >POWER BI: Funnels</h2>
                <h4 class = custom_h4> The Basics: Funnels</h4>
                
                    <p>
                         A funnel is a series of steps a user must take to complete an action that you want them to do. Online marketers go on about funnels all the time and with good reason. Understand your funnel is essential in online businesses, as it allows you to see where users are dropping off along various parts of your site. For instance a form completetion or an online checkout can be broken down into various steps that needs to be completed in order. Let's look at a an ecommerce store example:
                     </p>

                      <ul>
                      <li>STEP 1: User vists your website.</li>
                      <li>STEP 2: User vists your visits a product page.</li>
                      <li>STEP 3: User adds product to cart and proceeds to checkout page</li>
                      <li>STEP 4: User purchases item</li>
                  </ul> 
                  <p> We can see the above steps need to be completed one after the other to reach a desired action. A desired action is known as a conversion (in this case purchasing the item). Of course not all visitors to the site will result in a conversion! The proportion of visits to conversions ( conversions/visits ) is known as the conversion rate (aka the most thrown around term in all of digital marketing). Let's look at a simple example:
                  </p>
                  
                   <ul>
                      <li>STEP 1: 100 users visit your site.</li>
                      <li>STEP 2: 80 of those 100 users visits a product page.</li>
                      <li>STEP 3: 20 of those 80 add a product to your cart.</li>
                      <li>STEP 4: 1 of those 20 makes a purchase</li>
                  </ul> 
                  <p> In this scenario our entire funnel conversion rate would be 1% (1 purchase/100 visitors). </p>
                   <p>
                       Also our conversion rate along each step of the funnel would be 80%, 25%, and 5% respectively. This is better known as your page to page conversion rate.  Note also that the product of each of your page to page conversions will give you your total funnel conversion rate:
                       (i.e 80%*20%*5% = 1% ). See diagram below for a clear picture. 
                   </p>

                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                           <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiZDcyZWFhMjMtNDRlOS00ZDhkLTk2ZjgtYTQ5ZTQ5NmIwNGJkIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                           Fig 1-a: Simple Marketing Funnel
                        </figcaption>
                      </figure>   

              <h4 class = custom_h4> Some Examples of Interactive Funnels </h4>
                     
                     
                     
                      <figure class = "custom_graph_figures">        
                        <div class="video-container">
                            <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiY2M4NTliODMtNDBkOS00NjIwLWIxMDctY2M4Zjg3NWM1NmRkIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-b: Interactive Funnel Segment by source and device.
                        </figcaption>
                    </figure>   
                      <p>
                        The graph lets you select device and source to see the vistor drop off by source and device. This is a great way to see if there can be any improvements on a particular device, and compare traffic quality for different marketing channels. It is often the case the different sources, ie Facebook and Google will have different convesion rates on your site. Also there tends to be differences between conversion rates across devices. When testing, you should measure by source and/or device if you have enough traffic. 
                      </p>
                      
                      <p> While Funnel charts give a visual representation of drop off rates across each step in your funnel, you may want to have a table representation of your data as well, shwoing conversion rates only each step. Belows give an example of a table style view. Though not particularly pretty, it shows you conversion page to page conversion rates by source and device.</p>
                       
                    <figure class = "custom_graph_figures">        
                        <div class="video-container">
                           <iframe width="800" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiMTU2NzgzMjItZDg0Mi00YTA2LTkxNzctNDQ3MTYwZWY1YzcxIiwidCI6IjcxOGI4YTliLTQ0ZDgtNDQxYS1hMzQ0LTQyOTRlYTg0MjE3MiIsImMiOjZ9" frameborder="0" allowFullScreen="true"></iframe>
                        </div>
                        <figcaption class = "custom_figcaption">
                            Fig 1-c: Displaying the page to page (step to step) conversion rate along each part of the funnel.
                        </figcaption>
                    </figure>   
                       
                       <p>
                        This a table style view of the marketing funnel above. By selecting source and device can you see which medium and step might by a cause concern? If you answered source: Facebook, device: Mobile and Funnel Step: Add Product to Cart you would be right! 
                      </p>

                       <br>
            
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
