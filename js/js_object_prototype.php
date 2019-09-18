
<?php include "../includes/header/header0.php"; ?>
  
  <title>Javascript Object Prototypes | Dash-Intel</title>
<meta name="title" content= "Object prototypes in javascript. | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript Object Constructors | Dash-Intel"/>
<meta 
    name = "description"
    content = "Methods are functions in javascript that are related to 
    a specific object. In javascript, you can create an object and attach specific functions to that object."
 >
   


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
            
            <h2 class = "custom_more_margin">Prototypes in JS</h2><br>
         <p>
             <span class="myword myword__green">Methods</span>
            
        
       are functions in javascript that are related to a specific object. In javascript, you can create an object
       and attach specific functions to that object (i.e methods of that object). 
       This is best done via the
       <span class="myword myword__green">prototype</span>
        keyword as shown below.
         </p>
             
                     <h4 class = "custom_h4">Creating your first Prototype (Example 1)</h4>
                     <p>
                        The following creates a
                        <span class="myword myword__blue">Person</span>
                          object constructor with 
                          <span class="myword myword__green">properties</span>
                           of name, birthYear ,company and gender.
                        We then create a <span class="myword myword__green">method</span> for that object, called 
                         <span class="myword myword__blue">`greeting`</span>.
                     </p>
                     <pre><code class = "language-js">   
                     //Create a `Person` object constructor
                        function Person(name,birthYear,company,gender){
                            this.name = name;
                            this.birthYear = birthYear;
                            this.company = company;
                            this.gender = gender;
                         }
                    // Create a greeting method
                     Person.prototype.greeting = function (){
                         return `Hello my name is ${this.name} and I'm the CEO of ${this.company}!`;
                     }

                     // Displaying this in the console
                     const mark = new Person('Mark',1984,'Facebook','male'); // create new person object mark
                    console.log(mark.greeting()); // call the greeting method.
                      </code> </pre><br><br>


                      <h4 class = "custom_h4">Calculating the age using Prototypes (Example 2)</h4>
                     <p>
                        Create a new prototype called 
                         <span class="myword myword__blue">`calculateAge`</span>
                         for the 
                         <span class="myword myword__blue">Person</span> 
                          object function constructor.
                     </p>
                     <pre><code class = "language-js">   
                     //Create a `Person` object constructor
                        function Person(name,birthYear,company,gender){
                            this.name = name;
                            this.birthYear = birthYear;
                            this.company = company;
                            this.gender = gender;
                         }

                        // Create a calculateAge method
                        Person.prototype.calculateAge = function (){
                            const currentYear = (new Date()).getFullYear(); // get the current year
                            return currentYear - this.birthYear; // return the age.
                        }

                        // display this in the console with the `mark` object.
                        const mark = new Person('Mark',1984,'Facebook','male'); // create new person object mark
                        console.log(mark.calculateAge());
                      </code> </pre><br>

                      <p>
                      All
                      <span class="myword myword__green">instances</span>       
                       of the <span class="myword myword__blue">Person</span> object we create (ie. `mark`, `elon`) 
                       have access to the 
                       <span class="myword myword__green">calculateAge</span> method.
                      The calculateAge method (or prototype) is just a function that is unique to the 
                      <span class="myword myword__blue">Person</span> 
                       object constructor. 
                      <br><br>
                      Creating these methods using the prototype keyword is better than creating these methods inside the Person object constructor itself.
                      This is because it creates a seperation between object properties and objects methods and results in cleaner, faster and more organized code.
                      This seperation is the standard method for <span class="myword myword__red">ES5</span> and the preferred way for many developers.
                      </p>


                   
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pbirthYears -->
   <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
