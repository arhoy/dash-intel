<?php include "includes/header0.php"; ?>
  
  <title>Es6 Basics of Express.js | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript is a cross platform, light weight object oriented programming language used most commonly in the browser. With Node.JS Javascrip can be used as a server side language too.">
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>




<body>
<?php include_once("includes/analyticstracking.php") ?>
<script src="includes/prism.js"></script>
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
            
            <h2 class = "custom_more_margin" id = "pb_intro" >Basics of express.js for beginners</h2>
             <h4 class = "custom_h4">
             What is express.js
             </h4>

             <p>
             Express.js is a very popular lightweight framework for server side javascript.
             Server side javascript is used for building the backend for your web application.
            Express works with node.js and can be installed easily with npm. 
            <br><br>
            Express helps organize your app into an <strong>MVC</strong> architecture on the backend/server side
            with the help of other libraries like Mongoose for MongoDB.
             </p>

             <p>
                With express.js you can do <strong>CRUD</strong> operations. CRUD stands for  
                <strong>create</strong>, <strong>read</strong>, <strong>update</strong> and <strong>delete</strong>.
                 These are the four basic operations that are used to create web apps.
             </p>

             <p>Express.js is a very popular framework with millions of downloads each week. It is easy to learn so with the basics provided below.
             </p>

             <h4 class = "custom_h4">
             How to download
             </h4>
             <p>
             You can download express using npm  <a href="https://www.npmjs.com/package/express" target = "_blank">here</a>. 
             You will need to install <a href="https://nodejs.org/en/" target = "_blank">node.js</a> first if you haven't already. 
             In terminal, inside your working folder:
            <pre><code class="language-markup">
            npm install express
            </code></pre>
             </p>

            <p> <strong>Sidenote: </strong> 
                In your text editor, I use visual studio, type 
                <strong>ctr</strong>  +  <strong>shift</strong>  + <strong>~</strong>  
                to open the terminal. This way you have the terminal and code editor all in one place.
             </p>

            <h4>First lines of code</h4>
            <p>
            In your text editor, type the following,
            </p>
            <pre><code class = "language-js">

            // use express
            const express = require('express');
            const app = express();

            // send your first response.
            app.get('/',(req,res)=>{
            res.send('hello world');
            });

            // PORT 
            const port = process.env.PORT || 3030
            app.listen(port,()=>{
                console.log(`listening on port ${port}`);
            })
            </code></pre><br>

            <p>
                To send your first response, you use app.get. The first parameter is the where you want that response to be sent to. In this case, the home page. 
                The second parameter is the <strong>callback</strong> function which also has two parameters <strong>req</strong> and <strong>res</strong> which stands for 
                request and response.
            </p>
            <p>
                <strong>res.send</strong> will send the response to a specified location. In this case, the home page of the app.
            </p>

             <h4>Running the server on your local host</h4>

             <p> 
                In terminal type: 
            </p>
                <pre><code class = "language-markup">
                node index.js
                </code></pre>

            <p>Next go to your browser and type <strong>http://localhost:3000</strong> </p>

            <p>You should see the message `hello world`</p>

           

            <h4>Trouble shooting</h4>

            <p>Localhost:3000 might not be the default PORT on your computer. To set the port, inside the <strong>terminal</strong> try the following:
                <pre><code class = "language-markup">
                $env:PORT = "3000"
                node index.js
                </code></pre>
               
            </p>

            <h4>Nodemon: a useful tool</h4>
            <p>When you run node you must always stop and start the terminal and refesh the browser each time you make any sort of changes. 
            Nodemon, does the first steps for you and watches any changes made in your files. To install nodemon, open a new terminal and type:
            </p>
            <pre><code class = "language-markup">
            npm install -g nodemon
            </code></pre>

           <p>
           This will install it globally. You can also try the following to install it as a <strong>dev dependency</strong>
           </p> 
           <pre><code class = "language-markup">
           npm install --save-dev nodemon     
           </code></pre>
                
            <p>
            This is part 1 of intro to express.js. Part 2 coming soon.
            </p>

        
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
