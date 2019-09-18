
<?php include "../includes/header/header0.php"; ?>
  
  <title>Javascript Intro to Webpack | Dash-Intel</title>
<meta name="title" content= "What is webpack | Dash-Intel" />
<meta name="metatitle" content= "Learning the basics of webpack | Dash-Intel"/>
<meta name="description" 
     content= "Webpack in javascript basics"
>
   
   
<?php include "includes/header.php"; ?>
<?php include "../includes/header/header.php"; ?>

<?php include "../includes/css/css_historical.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>





<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include_once("../includes/utils/analyticstracking.php") ?>
<script src="includes/prism.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Global Components -->
<!-- Global Components -->
<?php include "../includes/header/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
  
<?php include "../includes/navigation/left_nav.php"; ?>
           
            
        <!--Main Content-->
            
            <h2 class = "custom_more_margin">Installing webpack</h2>
            <p>
        <ol>
            <li>create a new folder called `learnWebpack`</li>
            <li>
                Open up visual studio code editor.
            </li>
            <li>
            <span class="myword myword__green">ctrl +shift + ` </span> 
            </li>
            <li>in the terminal write 
            <span class="myword myword__green">npm init</span> 
            and follow steps to create package or press enter until complete. You should see a package.json created. 
            </li>
            <li>
                In the terminal write 
                <span class="myword myword__green">npm install --save-dev webpack</span> 
                to install webpack. You should see a node_modules folder created
            </li>
            <li>
                In the terminal write 
                <span class="myword myword__green">npm install --save-dev webpack-cli</span> 
                to install the CLI (command line interface) for webpack.
            </li>
            <li>
                Create an index.html file and inside create a basic template by writing
                <span class="myword myword__green">doc</span> + <span class="myword myword__green">tab</span>  
            </li>
            <li>
                Open a new terminal (without closing previous) and write
                <span class="myword myword__green">live-server</span>
            </li>
            <li>
            In the terminal write: 
            <span class="myword myword__green">node_modules/.bin/webpack index.js</span>
            </li>
        </ol>
            </p><br>

        
        <h2 class = "custom_more_margin">Bundling</h2>
      
        <p>
        we can create a bundle using:
        <span class="myword myword__green">node_modules/.bin/webpack</span>

        </p>
        <p>
        In the package.json file create a script called 
        <span class="myword myword__green">build</span> which runs webpack using the keyword webpack.
        </p>

        <p>
        To get rid of the warning you should write the following in the scripts:
        webpack --mode development
        </p>

          <h2 class = "custom_more_margin">Installing Babel</h2>
          <p>
            Write the following in the terminal
            npm install --save-dev babel-core babel-loader babel-preset-env
          </p>
              
              

         
        

          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
