<?php include "includes/header0.php"; ?>
  
  <title>HTML 101 | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript is a cross platform, light weight object oriented programming language used most commonly in the browser. With Node.JS Javascrip can be used as a server side language too.">
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css.php"; ?>

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
            
            <h2 class = "custom_more_margin" id = "whatIsJS" >HTML 101</h2>


                <h4 class = "custom_h4">What is HTML</h4>
            <p>HTML stands for hypertext markup language.
              HTML allows you to build the structure and content of websites. HTML is structured in tags.
               Whenever you open a tag in HTML you must close a tag.
               Tags let you identify what content you want to place inside it. For example:
            </p>
                    <img class = "html__image html__image__small" src="../images/tagsInHTML.png" alt=""><br><br>
                    <p>The title "Learning HTML" is placed between the opening and closing title tags.</p><br>

            

              <h4 class = "custom_h4">Basic Setup</h4>
              <p>To get started with HTML you need a text editor. A recommended and popular text editor in 2018 is 
              <a href="https://code.visualstudio.com/" target = "_blank">Visual Studio Code.</a>
        
              <br> You can also create a standard html document by writing "doc" then hitting the tab key on a modern text editor such as Visual Studio code. 
              If that does not work you can try an extension such as <a href="https://emmet.io/">emmet</a> which will help you write HTML much faster.
               Below is an example of a standard HTML template. 
              </p>
            
                    	<pre><code class = "language-markup">
                        &lt;!doctype html>
                         &lt;html lang="en"> &lt;!--the opening html tag-->
                            &lt;head>
                                &lt;meta charset="utf-8"> &lt;!--specifies what character set your website is written it. -->
                                &lt;title>Some title &lt;/title> &lt;!--the opening and closing title tags-->
                            &lt;/head>

                            &lt;body>
                                 &lt;h1> H1 header Tag! &lt;/h1> &lt;!--the opening and closing h1 header tags-->
                                 &lt;p> paragraph tag! &lt;/p> &lt;!--the opening and closing paragraph tags-->
                            &lt;/body>
                         &lt;/html>  &lt;!--the closing html tag-->
                            
                             </code> </pre>

                    <p>This is the basic structure of very simple website with only HTML. <br><br>
                    There is the <strong>HTML</strong> tag 
                    where all the other HTML tags go inside. <br><br>
                    The <strong>head</strong> tag is an HTML tag where information about our site is placed that does not get displayed in the body of the website. 
                    For example, the <strong>title</strong> of a web page goes inside the <strong>head</strong> tag. <br><br>
                     Inside the <strong>body</strong> tag we display the information we want to show the user of our website. The h1 header is the main heading tag for a webpage. 
                     Inside the <strong>paragraph</strong> tag we write a bit more content in such as a paragraph or sentence.
                    <br><br> <strong>Note: </strong>What you see in grey between <strong>&lt;!--</strong> and <strong>--></strong> are comments in HTML. <br><br>
                    <strong>Finally,</strong> what is doctype at the top?  
                    Doctype html tells the web browser the document is HTML. Doctype is not an html tag, rather a document declaration. It is good practice to always include it. <br><br>
                             
                    </p>

                     <h4 class = "custom_h4">Header Tags</h4>
                    <p> There are six header tags in HTML ordered from largest (most important) to smallest (less important).
                     Typically h1 to h4 is more commonly used, while h5 and h6 are used much less often</p>
                     <pre><code class = "language-markup">   
                     &lt;h1> H1 header Tag! &lt;/h1> 
                     &lt;h2> H2 header Tag! &lt;/h2> 
                     &lt;h3> H3 header Tag! &lt;/h3> 
                     &lt;h4> H4 header Tag! &lt;/h4> 
                     &lt;h5> H5 header Tag! &lt;/h5> 
                     &lt;h6> H6 header Tag! &lt;/h6> 
                      </code> </pre><br><br>


                     <h4 class = "custom_h4">Link Tags</h4>
                    <p> Links allow the user to go from one webpage or website to another. As you know link are used all the time in webpages.
                    In between the <strong>a tags</strong> is where you put the content that is displayed to the user on your site. 
                     </p>
                     <pre><code class = "language-markup">   
                     &lt;a href="Your URL goes here">link text &lt;/a>

                     &lt;a href="https://www.google.com/">Take me to Google Please &lt;/a>
                      </code> </pre><br><br>

                     <h4 class = "custom_h4">Link Tags with new tab</h4>
                    <p> Sometimes it is usefull to create a link that opens up a new tab rather than direct the user away from the current page they are on.
                    This is typically used when you have a link pointing to another website. After all, you want to keep users on your site. 
                    <br><br> To create a link to open up a new tab add in an HTML target attribute.
                     </p>
                     <pre><code class = "language-markup">   
                     &lt;a href="http://dash-intel.com/" target="_blank">Go to Dash Intel.com &lt;/a>
                      </code> </pre><br><br>

                  
                  <h4>Create an alert message:</h4>
                  <p>Another simple way to check to see everything is linked up and working is using the alert function. A msg box should pop up on the screen.</p>
                  <pre><code class = "language-js">
                    alert('hello world');
                   </code> </pre><br>

                   <h4 id = "jsIntrocomments">Creating comments:</h4>
                   <p>Comments are created using <em>//</em> for single line comments and  <em>/*  */ </em> for multi-line comments.
                   Comments let you document your code and allow others to understand what you are doing. A line in commments wont result in any of the code being executed.
                   </p>
                  <pre><code class = "language-js">
                   // This is for a single line comment

                   /* This is for 
                    multiple line comments 
                    in javascript
                   */   
                   </code> </pre><br>
         
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
                   <p>Note: The convention of naming variables is to use <em>camel casing.</em> The first word is never capitalized. 
                   We did not assign a value to the variable <strong>jim</strong>, which is why the javascript engine, automatically assigns the a value of <em>undefined</em>. 
                 </p>
                   <br>
                   <p>You might hear that variables are an address to a memory location. This is another way to think of a variable. 
                   Variables let you store information in a computers memory which you are later able to retrieve when you call that variable. Without variables, we cannot store and retrieve values for later use.
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
                   <p>The final output is converted to a string. This is an example of <em>data type coercion</em> </p>


                      <h4 id = "jsIntroOperators">Operators:</h4>
                   <p> The following operators are:
                   <ul>
                   <li><strong>+ </strong>Adding numbers or concatenating strings together</li>
                   <li><strong>- </strong>Subtracting numbers</li>
                   <li><strong>* </strong>Multiplying numbers</li>
                   <li><strong>/ </strong>Dividing Numbers</li>
                   <li><strong>% </strong>Modulus operator returns the remainder left over, when the first number is divided by the second number.</li>
                   <li><strong>** </strong>Exponent operator.</li>
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
                   <li><strong>&lt;= </strong> Less than</li>
                   <li><strong>&gt;= </strong> Greater than</li>
                   <li><strong>== </strong> Checks for equality <em>after</em> doing type conversion</li>
                   <li><strong>!= </strong> Checks for inequality <em>after</em> doing type conversion</li>
                   <li><strong>=== </strong>Checks for equality without type conversion</li>
                   <li><strong>!== </strong>Checks for inequality without type conversion</li>
                   <li><strong>&amp;&amp; </strong>AND Operator</li>
                   <li><strong>|| </strong>OR Operator</li>
                   <li><strong>! </strong>NOT Operator</li>
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
                    <p>Using <strong>if</strong>, <strong>else if</strong> and <strong>else</strong> enables your code to branch out.  This allows you to check a certain condition or criteria and only run that line of code, if that condition is met. 
                    If the first <strong>if</strong> statement is true, the expression will be executed and only that line of code will run. 
                    Otherwise, it will keep checking the other  <strong>else if</strong> statements. If non of them are true, the <strong>else</strong> statment gets executed and the corresponding line of code will be returned.

                   
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
                    Functions are used when you need to do a certain task or procedure over and over again. Put simply, a function is a block of code that does a certain task.
                    Instead of writing that block of code over and over again, we write functions to simplify and reduce the amount of code written.
                    </p>
                  <pre><code class = "language-js">
                  var myFirstFunction = function(){
                      console.log('hello world');
                  }
                  myFirstFunction(); // calling the function
                  // expected output: hello world;
                  </code> </pre>
                    <p>
                    That is pretty much the most basic function you can write. 
                    As you can see when we call the function we write the function name followed by <strong>()</strong>. 
                    We defined this function as <em>myFirstFunction</em> and stored it in a variable. Instead of using <em>console.log</em> we can also use the <strong>return</strong> keyword.
                     </p>

                     <pre><code class = "language-js">
                  var myFirstFunction = function(){
                      var greeting = 'hello world';
                      return greeting;
                  }
                  console.log(myFirstFunction()); // calling the function.

                  /* Whenever you `create` a function using a variable, 
                  you must later `call` the function in order for something to happen */
                  // expected output: hello world;
                  </code> </pre>

                  <p> <strong>Note: </strong> The variable greeting exists only inside the function. 
                  For example, if you try to <em>console.log(greeting)</em> on the last line above, you will get an undefined variable error. 
                  This is refered to as <em>scope</em> and is a crucial concept in js and programming in general. A good way to think about scope, 
                  is that anything inside the function is not visible to the outside (ie. global scope). However, functions are able to see variables outside the function.
                  These are referred to as global variables.
                  </p>
                 

                 <h4>Functions with if, else if and else statements</h4>
                 <p> We can define a global variable outside of a function scope. Based on the value of this variable, the function will print (console.log)
                 a different output.
                 </p>

                  <pre><code class = "language-js">
                  var timeOfDay = 'morning'; //create variable timeOfDay outside of the function. (ie. global variable)
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
                     greetingFunction(timeOfDay); // good morning
                  </code> </pre><br>

                <h4>Functions with Parameters:</h4>
                <p><strong>Parameters</strong> are arguments in a function. You can thing of a parameter as an input to a function. Depending on the parameter
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
                     // Sidenote: a parameter is a local variable. It does not exist outside the function.
                  </code> </pre><br>


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
             </code> </pre><br>

             <h4 id = "jsIntro_anonymousFunction">Anonymous Functions</h4>
             <p>
                 <strong>Anonymous functions</strong> are functions without a name. For instance:
                 <pre><code class = "language-js">
                 //create a function with multiple inputs
                 function(a,b){
                     return a + b;
                 }
                 //An Anonymous function
             </code> </pre> <br>

          <h4 id = "jsIntro_functionExpression">What are function expression?</h4>
             <p><strong>Function expressions: </strong> are anonymous functions that are assigned to a variable. 
             For instance: </p>
             <pre><code class = "language-js">
                 //A function expression
                 var add1 = function(a,b){
                     return a + b;
                 }
                // a function expression.
             </code> </pre><br>
                 <p><strong>Note:</strong>If you call the function <strong>add1</strong> <em>before</em> the function expression you get an undefined TypeError.
                  </p>

                     <pre><code class = "language-js">
                 add1(2,1); // expected output: TypeError: add1 is not a function
                 var add1 = function(a,b){
                     return a + b;
                 }
             </code> </pre><br>
             <h4 id = "jsIntro_functionDeclarations">What are function declarations?</h4>
             <p><strong>Function Declarations</strong> are <em>named functions</em>. They are not assigned to a variable and are written like:</p>
             <pre><code class = "language-js">
                 add2(2,1); // expected output: 3;
                 function add2 (a,b){
                     return a + b;
                 }
                 // add2 is an example of a function declaration. It can be called before the named function.
                 // note function statement and function declaration is often used interchangeablely.
             </code> </pre><br>




         <h4 id = "jsIntro_functionConstructors" class = "custom_h4">Function Constructors</h4>
         <p>
                 Function constructors create blueprints for an object. 
                 They are handy when we know we will be creating many similar objects with similar properties.
                 Below outlines the `steps` or algorithm needed to create function constructors.
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
</code> </pre><br><br>



          



            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


        <!-- Ads will go here or link to other pages -->
       <?php include "includes/footer.php"; ?>
