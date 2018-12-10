<?php include "includes/header0.php"; ?>
  
  <title>Javascript Classes | Dash-Intel</title>
<meta name="title" content= "Classes in javascript | Dash-Intel" />
<meta name="metatitle" content= "Classes are a new feature in ES6 | Dash-Intel"/>
<meta name="description" 
     content= "Classes in javascript are syntactical sugar to create function constructors for objects."
>
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>
<?php include "includes/css/css.php"; ?>




<body>
<?php include_once("includes/analyticstracking.php") ?>
<script src = "./includes/prism.js"></script>
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
            
            <h2 class = "custom_more_margin">Javascript Classes</h2>
            <p>
            Javascript <span class = "myword myword__defn">classes</span> are a new ES6 feature that is akin to creating <span class = "myword myword__defn">object constructors</span> (object blueprints) in ES5.
             Classes are not a new concept, rather they are <em>syntactical sugar</em> that makes code more readable and easier to understand.
             It is recommended to learn about creating object constructors (ie. blueprints for objects) the <a class = "hyperlink" href="#"> <span class="underline">old way</span></a> ,
              so you have a better understanding of how javascript works. It is also important to have an understaning of the old method, as lots of older (es5) code is written without using classes.
            <br><br>
             To summarize, classes make it easier to create objects blueprints, these blueprints were created using object function constructors and prototypes in ES5.
  
            </p>
          
                     <h4 class = "custom_h4">Creating a Class</h4>
                     <p>We can create a new class in javascript using the following syntax</p>
                     <pre><code class = "language-js">   
                         class Car {
                             constructor(make,model,manufactureYear){
                                 this.make = make;
                                 this.model = model;
                                 this.manufactureYear = manufactureYear;
                             }
                             calcAge(){
                                 const age = new Date().getFullYear - this.manufactureYear;
                                 return age;
                             }
                         }

                         // create a new instance of the Car class
                         const honda = new Car('honda','civic',2018);

                         // print the age to the console
                         honda.calcAge();
                      </code> </pre><br>
                      <p>The <span class = "myword myword__defn">constructor</span> 
                      method is where you put the properties of the class you create. There can only be one constructor object for every class you create.
    
                      </p>
                      <p>After the constructor method you can define the  <span class = "myword myword__defn">prototype methods</span> for that class.
                      Prototype methods can simply be thought of as functions related to the class it is in.
                        For instance, <span class="myword myword__variable">calcAge</span> is a function belonging to the class 
                        <span class="myword myword__variable">car</span>
                      </p>


                    <h4 class = "custom_h4">Class Declarations are not hoisted</h4>
                     <p>You must declare a class before you access it.</p>
                     <pre><code class = "language-js">   
                      // Will Not work
                      // Car is not defined yet. If classes were `hoisted` then this would work
                      const honda = new Car('honda','civic',2018);  

                      class Car {
                             constructor(make,model,manufactureYear){
                                 this.make = make;
                                 this.model = model;
                                 this.manufactureYear = manufactureYear;
                             } 
                      
                      </code> </pre><br>
                      <p>
                          Typically classes are stored in seperate javascript files and then imported into the html file before the closing body tag.
                        In addition, you can create module exports for each class if you are working on a larger project.
                      </p>

            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
