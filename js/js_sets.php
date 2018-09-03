<?php include "includes/header0.php"; ?>
  
  <title>Javascript Sets | Dash-Intel</title>
<meta name="title" content= "What is Local Storage in Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning about sets in javascript | Dash-Intel"/>
<meta name="description" 
     content= "Javascript sets allow you to store a unique list of items"
>
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>

<link rel="stylesheet" href="includes/prism.css" data-noprefix />



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
            
            <h2 class = "custom_more_margin">Javascript Sets</h2>
            <p>
            Javascript sets allow you to store a unique list of items. 
            Sets cannot have duplicate values and will ignore any duplicate values being put into the set. 
            The basic properties of sets are outlined below.
            </p>
          
                     <h4 class = "custom_h4">Creating a new set</h4>
                     <p>We can create a new set in javascript using the following syntax</p>
                     <pre><code class = "language-js">   
                         let groceryCart = new Set(); //create a new set called groceryCart
                      </code> </pre><br>


                    <h4 class = "custom_h4">Adding items to the set</h4>
                     <p>We add new items using the `add` method in javascript</p>
                     <pre><code class = "language-js">   
                      groceryCart.add('coffee');
                      </code> </pre><br>

                    <h4 class = "custom_h4">Adding multiple items to the set</h4>
                     <p>One way of adding multiple items to the set is using a loop</p>
                     <pre><code class = "language-js">   
                    const groceryList = ['apples','oranges','bananas','coffee','tea','coffee','coffee'];
                    groceryList.forEach(item => {
                        groceryCart.add(item);  // add each item in the groceryList to the groceryCart set
                    })
                      </code> </pre><br>

                    <h4 class = "custom_h4">The size property of sets</h4>
                     <p>The size property of sets lets you find the number of items in thet set, similar to how the length property works for arrays</p>
                     <pre><code class = "language-js">   
                     // use the `size` method the check the length of the shopping cart
                        console.log(groceryCart.size); // will count distinct values only.
                      </code> </pre><br>

                      <h4 class = "custom_h4">Remove items from a set</h4>
                     <p>The delete property of sets lets you remove items from the set.</p>
                     <pre><code class = "language-js">   
                     // use the `delete` method to remove coffee in the shopping cart
                    groceryCart.delete('coffee');
                      </code> </pre><br>

                     <h4 class = "custom_h4">Check to see if items are in the set</h4>
                     <p>The `has` property of sets lets you check if items are in the set.</p>
                     <pre><code class = "language-js">   
                     // use the has method to check if coffee is in the shopping cart.
                     console.log(groceryCart.has('coffee'));
                      </code> </pre><br>


                    <h4 class = "custom_h4">Removing all elements in thet set</h4>
                     <p>The clear property of sets lets you check if items are in the set.</p>
                     <pre><code class = "language-js">   
                     // use the `clear` method to remove all items in the shopping cart.
                        groceryCart.clear();
                      </code> </pre><br>

                      
                    <h4 class = "custom_h4">Converting a set into an array</h4>
                     <p>If you want to convert a set into an array you can use destructring</p>
                     <pre><code class = "language-js">   
                     // convert groceryCart set into an array using destructuring.
                        const groceryCartToArray = [...groceryCart];
                      </code> </pre><br>
              
              
              

         
        

          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
