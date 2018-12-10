<?php include "includes/header0.php"; ?>
  
  <title>Learning React | Dash-Intel</title>
<meta name="title" content= "What is Javascript | Dash-Intel" />
<meta name="metatitle" content= "Learning Javascript basics | Dash-Intel"/>
<meta name="description" content= "Javascript is a cross platform, light weight object oriented programming language used most commonly in the browser. With Node.JS Javascrip can be used as a server side language too.">
   
   
<?php include "includes/header.php"; ?>
<?php include "includes/css/css.php"; ?>
<?php include "includes/css/styles.php"; ?>
<?php include "includes/css/css__highlighters.php"; ?>


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
            
            <h2 class = "custom_more_margin" id = "whatIsJS" >React Cheat Sheet</h2><br>
            <p>This tutorial aims to get you up and running with React. It is meant as a quick and dirty reference, not a comprehensive tutorial
            </p>
             
             <h4 class = "custom_h4">What is React</h4>
 
            <p>
                React is a front end library used to manipulate the DOM. 
            </p>

             <h4 class = "custom_h4">Should I learn React?</h4>
             <p> React makes it easier to create interactive web apps and has large community of developers. It is the most popular javascript library as of this writing (2018).
         
             </p>

            <h4 class = "custom_h4">Is there a prerequisite to learning React?</h4>
            <p>
                Front end developer knowledge including javascript and ES6. Familiarity with a node package manager such as npm or yarn. 
            </p>

        
            <h4 class = "custom_h4">Getting started</h4>
            <p>We will be using create-react-app to get started. (This will take a couple minutes) </p>
            <ul>
            <li>Step 1: Create a folder on your computer </li>
            <li>Open up this folder in your favourite code edtior</li>
            <li>In the terminal (vs code shortcut is ctrl + shift + i for an integrated terminal)</li>
            
            <pre><code class = "language-js">   
            create-react-app my_first_app
            </code> </pre><br>
            </ul>

            <p><strong>Note: </strong> If you are already inside the desired folder you want all the files to go to then you can do the following</p>
    
            <pre><code class = "language-js">   
            create-react-app .
            </code> </pre><br>
            <p>It will take a couple minutes next. After it is done, in the integrated terminal</p>

            <pre><code class = "language-js">   
            npm start
            </code> </pre><br>

<hr>

            <h2>Most Simple Form</h2>

             <pre><code class = "language-jsx">   
             import React, { Component } from 'react';

            class SignUp extends Component {
                state = {
                    firstname: ''
                }
                onChangeHandler = (e)=>{
                    let firstname = {...this.state.firstname};
                    firstname = e.target.value;
                    this.setState({firstname})
                
                }
                submitEventHandler = (e) =>{
                    e.preventDefault();
                    console.log(this.state);
                }
                render() {
                
                    return (
                        &lt;div className = "container">
                            &lt;form onSubmit = {this.submitEventHandler}>    
                                &lt;div className="form__element">
                                    &lt;label htmlFor="firstName">
                                        First Name
                                    &lt;/label>
                                    &lt;input onChange = {(e)=>this.onChangeHandler(e)} type="text" value = {this.state.firstname}/>
                                &lt;/div>
                                &lt;button> Submit Form&lt;/button>
                            &lt;/form>
                        &lt;/div>
                    );
                }
            }

        export default SignUp;
            </code> </pre><br>

            
        <?php include "includes/footer_0.php"; ?>
            
       </div>   


