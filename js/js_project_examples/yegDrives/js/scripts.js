
console.log('hello world');

var db = [
    {
        userName: 'Alex',
        password: 'Quasar' 
    },
    {
        userName: 'Mike',
        password: 'M' 
    },
    {
        userName: 'Brittany',
        password: 'Love' 
    },
    {
        userName: 'Sarah',
        password: 'Boring' 
    },
    
];


var newsFeed = [
    {
        userName: 'Bob',
        timeLine: 'I ate a sandwhich'
    },
    {
        userName: 'Brit',
        timeLine: 'I am so coool'
    }
];
// get info from the user interface
//var userNamePrompt = prompt("What is your username?");
//var passWordPrompt = prompt("What is your password?");

function signIn (db,userName,passWord){
    //loop throug array to see if it is true.
    // if at any point it is true, function stops and returns true
    for(var i = 0; i < db.length; i++){
        if(userName === db[i].userName && passWord === db[i].password) {
            return true;
        }
    }
    // we run this after forEach loop
   return false
    
}

function signInUI (){
    if(signIn(db,userNamePrompt,passWordPrompt)){
        console.log(newsFeed);
    }
    else{
        console.log('sorry the password / username is not correct');
    }
}
//signInUI();



// function UILogin(theSignIn){
//     if(theSignIn){
//         console.log('Thanks for signinig in');
//     }
//     else{
//         console.log(`user name is not correct`);
//     }
// }
// UILogin(signIn(db,userName,passWord));
// const myArr = [2,4,34,2,64,20];

// const reduceArray = myArr.reduce((accumulator,num)=>{
//     return accumulator + num;
// },0);


// var obj1 = { myValue: 100};
// var obj2 = { myValue: 100};
// console.log('Are they equal? ',obj1 === obj2); //expected output: false; 

// var obj3 = obj1;
// obj1.myValue = 200;
// console.log('Are they equal?',obj1 === obj3); //expected output: true;
// console.log([1,2,3] === [1,2,3]);

// INSTANTIATION
class Person {
    constructor(name,gender,age){
        this.name = name;
        this.gender = gender;
        this.age = age;
        console.log('what is this? ',this); // expected output" Person object.
    }
}

const anna = new Person('Anna','female',22);
//

console.log('async await ');

// async await
async function fetchUsers(){
    const resp = await fetch('https://jsonplaceholder.typicode.com/users')
    console.log(resp.json());
}

const wurls = [
   'https://jsonplaceholder.typicode.com/users',
   'https://jsonplaceholder.typicode.com/posts',
   'https://jsonplaceholder.typicode.com/albumss'
];

const getData1 = async function(){
    try{
        const [users, posts, albums] = await Promise.all(wurls.map(url=> 
            fetch(url).then(resp => resp.json())
        ))
        
        console.log('users',users);
        console.log('posts',posts);
        console.log('albums',albums);

    } catch(err){
        console.log(`try catch failed: catch returned`);
    }  
}
