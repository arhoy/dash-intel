
<?php include "../includes/header/header0.php"; ?>
  
  <title>Intro to javascript | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript made easy. Some beginner examples of intro to javascript.">
   
   

<?php include "../includes/header/header.php"; ?>
<?php include "../includes/css/css_historical.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>

<body>
<?php include_once("includes/analyticstracking.php") ?>
<?php include_once("../includes/utils/analyticstracking.php") ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKM22TJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Global Components -->
<?php include "../includes/header/headmenu.php"; ?>
 

<div class = "container-fluid custom_body_main">
<div class = "row">
      
    
<?php include "../includes/navigation/left_nav.php"; ?>
           
            
        <!--Main Content-->
            
            <h2 class = "custom_more_margin" id = "whatIsJS" > Intro to Javascript</h2>


                <h4 class = "custom_h4">What is Javascript</h4>
            <p>Javascript is a light weight, <span class = "myword myword__green">object oriented programming </span> language used for web development. 
            It is currently the most popular programming language
            in the world as of 2018 according to the annual StackOverflow survey.
            In addition, highly popular frameworks such as
               
              <span class = "myword myword__green">React</span>
              and 
              <span class = "myword myword__green">Angular</span>
               are all javascript based.  With
                
                <span class = "myword myword__green">Node.js</span>
                 you can run javascript

             on the backend, making it a language you can use in both the front and backend of development. 
             <br><br>
             Javascript is <span class = "myword myword__yellow">the programming language of the web</span>
            and it shows no sign of slowing down in popularity or development anytime soon.
          

               <p>
               Javascript is the main tool for the modern front end web developer. It is used to create interactive and dynamic websites that users can interact with. 
               Learning and understanding the basics of plain vanilla javascript is crucial before developing in frameworks such as React, Angular or run-time environments like Node.js.
               </p>

              <h4 class = "custom_h4">Basic Setup</h4>
              <p>Before getting started with writing 
              <span class = "myword myword__blue"><em>Hello World</em></span>
              in javascript you will need solid a text editor. A recommended and popular modern text editor is 
              <a href="https://code.visualstudio.com/" target = "_blank">Visual Studio Code.</a>
              Inside this text editor, you can copy and paste the following code below. Inside the script tag, below the closing body tag, is where the js file is typically inserted inside the html document.
              <br><br> You can also create a standard html document by writing 
              <span class="myword myword__black">doc</span>
               then hitting the
               <span class="myword myword__black">tab</span>
                key. This will create a standard HTML template like the one shown below without the script tag.
              <br><br> <strong>Note: </strong> "src" stands for source which is the location of your standard js file. 
              
              
              </p>
            
                    	<pre><code class = "language-markup">
                        &lt;!doctype html>

                         &lt;html lang="en">
                         &lt;head>
                         &lt;meta charset="utf-8">

                         &lt;title>Some title</title>
                         &lt;meta name="This is intro to JS" content="Vanilla JS">
                         &lt;meta name="author" content="Dash-intel">

                         &lt;link rel="stylesheet" href="css/styles.css">

                         &lt;/head>

                         &lt;body>
                         &lt;!-- connects your js and index.html file-->
                        &lt;script src="js/scripts.js"> &lt;/script> 
                         &lt;/body>
                         &lt;/html>
                            
                             </code> </pre>

                    <p>The javascript of your webpage is typically stored in a different file than the typical
                    <span class="myword myword__black">index.html</span> file. Step 1: Create a folder called 
                     <span class="myword myword__black">js</span> right next to your index.html file. Inside this 
                      folder create a file called 
                      <span class="myword myword__black">scripts.js</span>
                    <br><br>
                      You can now connect your javascript and index.html files with the following html line of code.
                     <span class="myword myword__black">&lt;script src="js/scripts.js"> &lt;/script> </span>
                     </p><br><br>

                     <h4 class = "custom_h4">Hello World</h4>
                    <p> With the set up out of the way, you can test it out with your first line of javascript:</p>
                     <pre><code class = "language-js">   
                       console.log('hello world');
                      </code> </pre>

                      <p> To see this in the browser:
                      <ol>
                      <li>open the file in your browser</li>
                      <li>open up the 
                      <span class = "myword myword__green">web developer tools</span> in your browser 
                       using 
                        <span class = "myword myword__black">ctrl</span> + 
                        <span class = "myword myword__black">shift</span> + 
                        <span class = "myword myword__black">i</span> on a pc.
                      <li>In the popup that comes up click on <span class = "myword myword__black">console</span> (right beside elements)</li>
                      </ol>
                      </p>
                      <p>
                      You should see <span class = "myword myword__blue"><em>Hello World</em></span> printed on the screen. 
                      Still stuck? Try the following resource: <a href="https://www.youtube.com/watch?v=pZPP8OSyU8A" target = "_blank">How to set up Javascript</a>
                      </p><br>

                  <h4>Create an alert message:</h4>
                  <p>Another simple way to check to see everything is linked up and working is using the 
                  <span class = "myword myword__green">alert</span>
                  keyword. A msg box should pop up on the screen.</p>
                  <pre><code class = "language-js">
                    alert('hello world');
                    // Note: alert is a build-in function in javascript. 
                   </code> </pre><br>

                   <h4 id = "jsIntrocomments">Creating comments:</h4>
                   <p>Comments are created using 
                   <span class = "myword myword__blue"><em>//</em></span>
                    for single line comments and 
                    
                    <span class = "myword myword__blue"><em>/**/</em></span> for multi-line comments.
                    <span class = "myword myword__green"><em>Comments</em></span> let you document your code so that others can better understand your code.
                     Code that is commented will not run.
                   </p>
                  <pre><code class = "language-js">
                   // This is for a single line comment

                   /* This is for 
                    multiple line comments 
                    in javascript
                   */   
                   </code> </pre><br><br>
         
                   <h4 id = "jsIntroVariables">Variables:</h4>
                   <p> Variables let you store data. There are many different types of data. The data types in javascript are 
                   <ul>
                   <li><strong>String: </strong>Text ie. "Sara"</li>
                   <li><strong>Numbers: </strong>Any type of number including decimals.</li>
                   <li><strong>Boolean: </strong>Logical values true and false</li>
                   <li><strong>Object: </strong>Containers for named values. An object can contains properties and methods.</li>
                   <li><strong>Null: </strong>variable exists and has Null as the value</li>
                   <li><strong>Undefined: </strong>variable exists, but its value is not yet assigned</li>
                   </ul> 
                   </p>
                  <pre><code class = "language-js">
                  var name = 'Sara';
                  console.log(name); //Sara
                  var age = 25;     //25
                  var isFemale = true; //true
                  var numberOfChildren = null; //null
                  var jim; // undefined
                   </code> </pre>
                   <p>1. The convention for naming variables is to use <span class = "myword myword__green"><em>camel casing.</em></span>
                   <br><span class = "myword myword__blue">isFemale</span> and <span class = "myword myword__blue">numberOfChildren</span> are examples of camel casing.
                   <br><br>
                   2. We did not assign a value to the variable <span class = "myword myword__blue">jim</span>. Unassigned values get automatically assigned the a value of <em>undefined</em>. We can still use this variable later on and <em>assign</em> it a different value.
                 </p>
                   <br>
                   <p> <strong>What exactly are variables?</strong> Variables are an address to a memory location.  
                   Variables let you store information (ie. values) in a computers memory which you are later able to retrieve when you call that variable. Variables allow for the storage and retrieval of values. This storage is at a specific location in a computers memory.
                   </p><br>

                     <h4 id = "jsIntroCombiningVariables">Combining variables:</h4>
                   <p> We can combine variables together in javascript even if these variables are not the same data type. For example:  
                   </p>
                  <pre><code class = "language-js">
                  var name = 'Sara';
                  var age = 25;
                  console.log(age + age); // 50
                  console.log(name +  ' ' + name); // Sara Sara
                  console.log(name + 25); // Sara25
                   </code> </pre>
                   <p>The final output is converted to a string. This is an example of <em>data type coercion</em> </p><br>


                      <h4 id = "jsIntroOperators">Operators:</h4>
                   <p> The following operators are:
                   <ul>
                   <li><span class = "myword myword__black">+</span>  For Adding numbers or concatenating strings together</li>
                   <li><span class = "myword myword__black">-</span>  For Subtracting numbers</li>
                   <li><span class = "myword myword__black">*</span>  For Multiplying numbers</li>
                   <li><span class = "myword myword__black">/</span>  For Dividing Numbers</li>
                   <li><span class = "myword myword__black">%</span>  For returning the remainder left over, when the first number is divided by the second number.</li>
                   <li><span class = "myword myword__black">**</span> Exponent operator.</li>
                   </ul>
                   </p>
                  <pre><code class = "language-js">
                    var name = 'Sara';
                    var age = 25;

                    console.log( (age*2) + 5); // 55
                    console.log( 11%7 ); // 4
                    console.log(2**5); // 32
                    console.log(name*3); // NaN
                   </code> </pre>
                    <p>The final output is not a number, since javascript expects a number not a string to be multiplied. <br>
                    In the first example, using brackets helps you define the order of operations.
                     </p>

                         <h4 id = "jsIntroLogicalOperators">Logical Operators:</h4>
                   <p> The Logical operators are:
                   <ul>
                   <li><strong class = "myword myword__black">&lt;=</strong> Less than</li>
                   <li><strong class = "myword myword__black">&gt;=</strong> Greater than</li>
                   <li><strong class = "myword myword__black">==</strong> Checks for equality <em>after</em> doing type conversion</li>
                   <li><strong class = "myword myword__black">!=</strong> Checks for inequality <em>after</em> doing type conversion</li>
                   <li><strong class = "myword myword__black">===</strong> Checks for equality without type conversion</li>
                   <li><strong class = "myword myword__black">!==</strong> Checks for inequality without type conversion</li>
                   <li><strong class = "myword myword__black">&amp;&amp;</strong> AND Operator</li>
                   <li><strong class = "myword myword__black">||</strong> OR Operator</li>
                   <li><strong class = "myword myword__black">!</strong> NOT Operator</li>
                   </ul>
                   </p>
                   <p> <em>===</em> is usually faster than <em>==</em> and the first one in general is recommended to use.
                   <br> Using <em>==</em> might result in unintended type coercion which may be difficult to debug.
                   </p>


                    <pre><code class = "language-js">
                    var name = 'Sara';
                    var age = 26;
                    var ageString = '26';
                    var gender = 'female';

                    console.log(age < 30 && gender === 'female'); //true
                    console.log(age< 30 && gender === 'male'); //false
                    console.log(age< 30 || gender === 'male'); //true
                    console.log(age == ageString); //true
                    console.log(age === ageString); //false
                   </code> </pre><br><br>
                    
                   <h4 id = "jsIntroIf_Else_Statments">If, Else if, else statements:</h4>
                    <p>Using <span class = "myword myword__green">if</span>, <span class = "myword myword__green">else if</span> and <span class = "myword myword__green">else</span> enables your code to branch out.  This allows you to check a certain condition or criteria and only run that line of code, if that condition is met. 
                   <br><br>
                    If the first <span class = "myword myword__green">if</span> statement is true, the expression will be executed and only that line of code will run. 
                    Otherwise, it will keep checking the other  <span class = "myword myword__green">else if</span> statements. If none of them are true, the <span class = "myword myword__green">else</span> statment gets executed and the corresponding line of code will be returned.

                   
                  <pre><code class = "language-js">
                   var yearOfBirth = 1995;

                    if (yearOfBirth > 1999){
                        console.log('generation z');
                    } 
                    else if (yearOfBirth > 1980){
                        console.log('generation y');
                    }
                    else if (yearOfBirth > 1961){
                        console.log('generation x');
                    }
                    else if (yearOfBirth > 1946){
                        console.log('generation baby boomers');
                    }
                    else {
                        console.log('other generation');
                    }
                    // expected output: generation y
                   </code> </pre><br><br>
                    



                 <h4 id = "jsIntroFunctions">Functions:</h4>
                    <p>
                   <span class = "myword myword__green">Functions</span>  are used when you need to do a certain task or procedure over and over again. Put simply, a function is a block of code that does a certain task.
                    Instead of writing that block of code over and over again, we write functions to simplify and reduce the amount of code written.
                    </p>
                    <p>Basic syntax for functions: </p>
                  <pre><code class = "language-js">
                  // Define a function called hello which prints out `hello world`
                  var hello = function(){
                      console.log('hello world');
                  }

                  hello(); // calling the function
                  // expected output: hello world;
                  </code> </pre>
                    
                  <p>You can call the <span class = "myword myword__blue"> <em>hello</em></span> function as many times as you like.</p>
                  <p>
                    Here we have assigned a function to the variable <span class="myword myword__blue">hello</span>. 
                    
                    Typically <a href = "#jsIntro_functionDeclarations" class = "hyperlink underlined">function declarations</span></a>  are used when creating functions.
                    This syntax is illustrated later on.

                     </p>
                     <p>
                     A main feature of functions are to <span class = "myword myword__blue">return</span> something. Return is a reserved keyword in javascript to do just that. For example:
                     </p>

                     <pre><code class = "language-js">
                  var anotherFunction = function(){
                      var greeting = 'hello world';
                      return greeting;
                  }

                  // calling the function and logging it to the console.
                  console.log(anotherFunction()); // expected output: hello world;

                  </code> </pre>
                  <p>

                  Whenever you create a function using a variable, 
                  you must later 
                  <span class = "myword myword__green">call</span> 
                  the function in order for something to happen.
                  </p>

                  <p> <strong>Note: </strong> The variable greeting exists only inside the function. 
                  For example, if you try to <em>console.log(greeting)</em> on the last line above, 
                  you will get an undefined variable error. 
                  This is referred to as <span class = "myword myword__green"><em>scope</em></span>.  A good way to think about scope, 
                  is that anything inside the function is not visible to the outside world. Ie. function create their own little universes.
                   However, functions have access to variables on the outside, and variables that we pass into functions are referred to as 
                   <span class = "myword myword__green">parameters</span>. 
                  </p>
                 

                 <h4>Functions with if, else if and else statements</h4>
                 <p> <span class = "myword myword__green">Global variables</span> are variables outside the function scope. 
                 They are called global variables because any functions has access to it and can manipulate it's values. 
                 The next example combines <span class="myword myword__green">functions</span> and <span class="myword myword__green">conditional statements</span>.   
                 </p>
                  <pre><code class = "language-js">
                  var timeOfDay = 'morning'; // global variable
                  var greetingFunction = function(){
                            if(timeOfDay === 'morning'){
                                console.log('good morning');
                            }
                            else if(timeOfDay === 'afternoon'){
                                console.log('good afternoon');
                            }
                            else{
                                console.log('good evening');
                            }
                      
                      }
                     greetingFunction(timeOfDay); // expected output: good morning
                  </code> </pre><br><br>

                <h4>Functions with Parameters:</h4>
                <p><span class="myword myword__green">Parameters</span>  are variables that are passed into a function.
                 You can thing of a parameter as an input to a function. Depending on the parameter
                a different output is created when you run the function. A function can have multiple parameters as well. Here is an example. 
                </p>

                    <pre><code class = "language-js">
                 
                      var greetingFunction = function(timeOfDay){
                            if(timeOfDay === 'morning'){
                                console.log('good morning');
                            }
                            else if(timeOfDay === 'afternoon'){
                                console.log('good afternoon');
                            }
                            else{
                                console.log('good evening');
                            }
                      
                      }
                     greetingFunction('morning'); // good morning
                  
                  </code> </pre><br>
                <p>Note: Parameters are also called <span class="myword myword__green">arguments</span> and are often used interchangeablely.</p>
                <br><br>

                <h4 id = "jsIntroFunctions_Parameters"> Functions with multiple Parameters:</h4>
                <p>Functions with multiple parameters. That means multiple inputs into a function to create a single output.</p>
                <p>Example 1:</p>
                 <pre><code class = "language-js">
                 //create a function with multiple inputs
                 var greetingFunction = function(name,timeOfDay){
                       if(timeOfDay === 'morning'){
                           console.log('good morning' + ' ' + name);
                       }
                       else if(timeOfDay === 'afternoon'){
                           console.log('good afternoon' + ' ' + name);
                       }
                       else{
                           console.log('good evening' + ' ' + name );
                       }
                 
                 }
                greetingFunction('Hannah','afternoon'); // good afternoon + ' ' + Hannah
      
             </code> </pre>

             <p>Example 2:</p>
                 <pre><code class = "language-js">
                 //create a function with multiple inputs
                 var add = function(a,b){
                     return a + b;
                 }
                console.log(add(2,4)) // expected output: 6;
             </code> </pre><br><br>

             <h4 id = "jsIntro_anonymousFunction">Anonymous Functions</h4>
             <p>
                 <span class="myword myword__green">
                 Anonymous functions
                 </span>
                  are functions without a name. For instance:
                 <pre><code class = "language-js">
                 //create a function with multiple inputs
                 function(a,b){
                     return a + b;
                 }
                 //An Anonymous function
             </code> </pre> <br><br>

          <h4 id = "jsIntro_functionExpression">What are function expression?</h4>
          <p>
          A <span class="myword myword__green">function expression</span> is a fancy way of referring to an
             anonymous functions that is assigned to a variable.  
             For instance: 
          </p>
       
             <pre><code class = "language-js">
                 //A function expression
                 var add1 = function(a,b){
                     return a + b;
                 }
                // a function expression.
             </code> </pre><br>
                 <p><strong>Note:</strong> If you call the function <span class="myword myword__blue">add1</span> <em> before</em> the function expression,  you get an 
                 <span class="myword myword__red">undefined TypeError.</span>
                 <p>
                 This is because function expressions are not <span class="myword myword__green">hoisted</span>. Hoisting refers to the way javascript is executed.
                 The take away is if something is <strong>not</strong> hoisted, then you must define it before 
                 calling
                  it.
                  </p>

                     <pre><code class = "language-js">
                 add1(2,1); // expected output: TypeError: add1 is not a function
                 var add1 = function(a,b){
                     return a + b;
                 }
             </code> </pre><br>
             <h4 id = "jsIntro_functionDeclarations">What are function declarations?</h4>
            
             <p> <span class="myword myword__green">Function Declarations</span> are functions that have names. I.e they are <em>named functions</em>.
              Because they are named functions, they are not assigned to a variable.
               An example of a function declaration:</p>
             <pre><code class = "language-js">
                 add2(2,1); // expected output: 3;
                 function add2 (a,b){
                     return a + b;
                 }
                 // add2 is an example of a function declaration. 
                 // It can be called before the named function.
             </code> </pre><br>
             <p>
                 Function declarations are 
             <span class="myword myword__green">hoisted</span>. Because they are hoisted, you can call the function at the top of your code before the function is declared.
             A <span class="myword myword__green">function statement</span> and a function declaration are often used to refer to the same thing.
             </p><br><br>




         <h4 id = "jsIntro_functionConstructors" class = "custom_h4">Function Constructors</h4>
         <p>
         <span class="myword myword__green">Function constructors </span> create
         <span class="myword myword__blue">blueprints</span> for an object. 
         A <em>function constructor</em> , <em>object constructor</em>  or <em>function object constructor</em>  
         all refer to the same thing.
         <br><br>
               
                 Regardless of how you call them, function constructors create blueprints for objects. This is useful when you need to create many 
                 similar <span class="myword myword__green">instances</span> of objects that share many similar 
                 <span class="myword myword__green">properties</span> or 
                 <span class="myword myword__green">methods</span>.
         </p>
        <pre><code class = "language-js">                           
            // Creating function constructors
            // Here is an example of creating a Person object using the function constructor method.
            // We name function constructors starting with a Capital letter by convention. 
            // This is to distinguish function contstructors from regular objects and functions.

            //Create a `Person` function constructor
            function Person(name,age,netWorth,gender){
                this.name = name;
                this.age = age;
                this.netWorth = netWorth;
                this.gender = gender;
            }

            const mark = new Person('Mark',34,'74 billion','male'); // a new Person object `mark` was created.
            console.log(mark); 

            // we can add a property to the existing Person object of mark.
            mark.nationality = 'American'; // this nationality is unique to the mark object only.
            console.log(mark); 

            // we can add a new method to the existing Person object or mark.
            mark.greeting = () =>{
                console.log(`Hi my name is ${mark.name} and I am CEO bitch`); // this greeting is unique to mark.
            }
            // calling the greeting function
            mark.greeting();


            // we can add additional properties or method to the Person function constructor anytime. 
            // Example 

            function Person(name,age,netWorth,gender){
                this.name = name;
                this.age = age;
                this.netWorth = netWorth;
                this.gender = gender;
                this.greeting = ()=>{
                    console.log(`Hi my name is ${this.name}!`);
                }
            }

            const jeff = new Person('Jeff Bezos', 54,'100 billion','male');
            console.log(jeff); // we see the jeff object does not have the `nationality` property.
            
            // calling the greeting method.
            jeff.greeting();

            // over writing the greeting method with a personalized `jeff` greeting method
            jeff.greeting = ()=>{
                console.log(`Hi my name is ${jeff.name} but you can call me king Bezos! `);
            }
            // calling the updated `jeff` greeting method
            jeff.greeting();
        </code> </pre>
        <p>
            You can also refer to
             <a href="https://dash-intel.com/js/js_object_constructors.php">
              here
            </a> for a more indepth explanation.
        </p>



          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
   <?php include "../includes/navigation/right_nav.php"; ?>
   <?php include "../includes/footer/footer.php"; ?>
   <?php include "../includes/footer/css.php"; ?>
