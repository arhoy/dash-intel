<?php include "includes/header0.php"; ?>
  
  <title>Javascript Inheritance | Dash-Intel</title>
<meta name="title" content= "What is inheritance in JS | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript Inheritance | Dash-Intel"/>
<meta 
    name = "description"
    content = "Inheritance allows us to pass prototype methods from one Object Constructor to another "
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
            
            <h2 class = "custom_more_margin">Inheritance in JS</h2><br>
         <p>
             <span class="myword myword__green">Inheritance</span>
             allows us to pass prototype methods from one    
             <span class="myword myword__green">object constructor</span> to another. 
             This allows us to write less code
            since objects can <span class="myword myword__green">inherit</span> the methods of other objects.
         </p><br>
             
                     <h4 class = "custom_h4">Inheritance: Inherit the properties (Step 1)</h4>
                     <p>
                        Create a new object constructor called
                        <span class="myword myword__blue">`Olympian`</span>.
                         Note: example uses code from a previous lesson. 
                        The final complete version is found below.
                     </p>
                     <pre><code class = "language-js">   
                     function Olympian(name,birthYear,gender,sport,numberOfOlympicGames,numberOfOlympicMedals){

                            // call the properties you want to inherit from the Person object constructor.
                            Person.call(this,name,birthYear,gender); 
                            // create the remaining properties for the `Olympian` function constructor 
                            this.sport = sport;
                            this.numberOfOlympicGames = numberOfOlympicGames;
                            this.numberOfOlympicMedals = numberOfOlympicMedals;
                            
                        }

                      </code> </pre><br><br>


                      <h4 class = "custom_h4">Inheritance: Inherit the protoypes (methods) (Step 2)</h4>
                     <p>
                        Set the
                        <span class="myword myword__blue">Olympian</span> prototypes to have
                          access to the <span class="myword myword__green">Person</span> 
                           prototypes.
                     </p>
                     <pre><code class = "language-js">   
                     Olympian.prototype = Object.create(Person.prototype);
                      </code> </pre><br><br>

                      <h4 class = "custom_h4">Inheritance: Create a new instance (Step 3)</h4>
                     <p>
                        Create a new 
                        <span class="myword myword__green">instance</span>
                          (of the object) using the 
                          <span class="myword myword__blue">Olympian</span>
                           function constructor.
                     </p>
                     <pre><code class = "language-js">   
                        const michaelPhelps = new Olympian('Michael Phelps',1985,'male','swimmer',5,28); 
                      </code> </pre><br><br>

                       <h4 class = "custom_h4">Inheritance: Create a new prototype (Step 4)</h4>
                     <p>
                        Create a new  
                        <span class="myword myword__green">prototype function</span>
                        for the  
                        <span class="myword myword__blue">Olympian</span>
                        object constructor.
                        <span class="myword myword__green"></span>
                        <span class="myword myword__green"></span>
                     
                     </p>
                     <pre><code class = "language-js">   
                     // We can create an `Olympian Greeting` that overwrites the Person Greeting.
                        Olympian.prototype.greeting = function(){
                            return `Hello my name is ${this.name} 
                                    and I'm a ${this.sport} 
                                    and have been to ${this.numberOfOlympicGames} Olympics!`;
                         } 

                    //Note: The old person greeting is still present for instances of Person. 
                      </code> </pre>
                      <p>
                          The function <span class="myword myword__green">greeting</span> is a function for the 
                          <span class="myword myword__blue">Olympian</span> object. This <em>function</em> is a special type of function.
                          It is a function that is usually referred to as 
                          a <span class="myword myword__green">method</span> <em>of </em> the 
                          <span class="myword myword__blue">Olympian</span> object. 
                      </p>
                      <br>



                 <h4 class = "custom_h4">Inheritance: Full Code Below</h4>
                     <p>
                        The following lines of code shows all the steps together
                     </p>
                     <pre><code class = "language-js">  

                     //Create Person Object Constructor 
                     function Person(name,birthYear,company,gender){
                        this.name = name;
                        this.birthYear = birthYear;
                        this.company = company;
                        this.gender = gender;
                    }

                    //Create Person greeting function for Person object constructor 
                    Person.prototype.greeting = function(){
                        return `Hello my name is ${this.name} and I am the CEO of ${this.company}!`;
                    }

                   //Create Person calculate age function for Person object constructor 
                    Person.prototype.calculateAge = function (){
                        const currentYear = (new Date()).getFullYear(); // get the current year
                        return currentYear - this.birthYear; // return the age.
                    }
                    
                   // Create new instance of Person `mark`.
                    const mark = new Person('Mark',1984,'facebook','male');

                  // Create Olympian Object Constructor using inheritance
                    function Olympian(name,birthYear,gender,sport,numberOfOlympicGames,numberOfOlympicMedals){
                        // call the properties you want to inherit from the Person object constructor.
                        Person.call(this,name,birthYear,gender); 

                        // create the remaining properties for the `Olympian` function constructor 
                        this.sport = sport;
                        this.numberOfOlympicGames = numberOfOlympicGames;
                        this.numberOfOlympicMedals = numberOfOlympicMedals;
                        
                    }
                    // inherit the prototypes from Person.
                    Olympian.prototype = Object.create(Person.prototype);

                    // create instance of Olympian
                    const michaelPhelps = new Olympian('Michael Phelps',1985,'male','swimmer',5,28);

            
                    // We can create an `Olympian Greeting` function.
                    Olympian.prototype.greeting = function(){
                        return `Hello my name is ${this.name} 
                        and I'm a ${this.sport} 
                        and have been to ${this.numberOfOlympicGames} Olympics!`;
                    }

                    console.log(michaelPhelps.greeting());
                    console.log(mark.greeting()); // note greeting for Person is still present to those instances.
                      </code> </pre><br>



                   
                   

                   
                   
            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pbirthYears -->
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
