<?php include "includes/header0.php"; ?>
  
  <title>Javascript Maps | Dash-Intel</title>
<meta name="title" content= "  Maps in ES6 and how to use them />
<meta name="metatitle" content= "Example of how to use maps in Es6"/>
<meta name="description" 
     content= "Maps are a new data strucure in es6 designed to store key / value pairs."
>
   
   
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
            
            <h2 class = "custom_more_margin">Javascript Maps</h2>
            <p>
            Maps are a new data strucure in es6 designed to store key / value pairs. <br><br>
            Maps are designed to replace object literals for storing key/value pairs.
            Using the new map data structure is beneficial because it gives us access to some handy properties. 
            These properties allow us to iterate over maps, use any data type as keys and easily add or remove data.
            </p>
          
                     <h4 class = "custom_h4">Storing key/value pairs (the old way) </h4>
                     <p>
                        We can use object literals to store key/value pairs. For example:
                     </p>
                     <pre><code class = "language-js">   
                     var oldCar = {
                        "make": "Toyota",
                        "model": "Corolla",
                        "year":  1999
                    }
                    console.log(oldCar.year) // retrieve the value of the year of the oldCar.
                      </code> </pre><br>


                    <h4 class = "custom_h4">Creating a map to store key/value pairs (the new way) </h4>
                     <p>
                     Create a new instance of a Map. Use the `set` keyword to set the key value pairs and the 
                     `get` keyword to retrieve values. For example: 
                      </p>
                  
                     <pre><code class = "language-js">   
                     // the new way
                        let newCar = new Map(); // create a new instance of Map.
                        // set the key / value pairs
                        newCar.set('make','Toyota');  
                        newCar.set('model','Tacoma');
                        newCar.set('year',2018);

                        console.log(newCar.get('year')); // retrieve the value of the year of the newCar.
                      </code> </pre><br>

                    <h4 class = "custom_h4">The size method for Maps</h4>
                     <p>Determine the number of unique keys in the Map</p>
                     <pre><code class = "language-js">   
                     console.log(newCar.size); // checks size of the map. Expected output: 3;

                     newCar.set('year',2019);
                    console.log(newCar.size); // expected output still 3. We just overwrote the value for the key `year`
                      </code> </pre><br>

                    

                      <h4 class = "custom_h4">Delete elements from a Map</h4>
                     <p>The delete property of maps lets you remove a key from the map.</p>
                     <pre><code class = "language-js">   
                     // use the `delete` method to remove coffee in the shopping cart
                        newCar.delete('make');
                      </code> </pre><br>

                     <h4 class = "custom_h4">Check to see if key exists in the Map</h4>
                     <p>The `has` property of sets lets you check if items are in the set.</p>
                     <pre><code class = "language-js">   
                     // use the `has` method to check if these keys exist in the newCar map.
                        console.log(newCar.has('year')); // true
                        console.log(newCar.has('brakes')); // false
                      </code> </pre><br>


              

         
        

          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/footer/footer.php"; ?>
