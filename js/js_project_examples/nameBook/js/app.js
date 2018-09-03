// instantiate the classes that you want to use
const names = new Names();
const ui = new UI();

// init
names.init();
ui.displayCurrentYear();
// Create the event listeners
// -- for the country names
document.querySelector('#btn__names').addEventListener('submit',names.generateNames);
// -- for the random name
document.querySelector('#generateRandomNameBtn').addEventListener('click',names.generateRandomName);

//create global variables
const resultDiv = document.querySelector('#result');
// set result to some random value to start
resultDiv.innerHTML = `
<div class = "alert alert-success">
    <p>Hi my name is <strong>Jazmín</strong> and I'm from <strong>Argentina</strong></p>
    <p>Hi my name is <strong>Lucrecia</strong> and I'm from <strong>Argentina</strong></p>
    <p>Hi my name is <strong>Luciana</strong> and I'm from <strong>Argentina</strong></p>
    <p>Hi my name is <strong>Mariana</strong> and I'm from <strong>Argentina</strong></p>
    <p>Hi my name is <strong>Isabella</strong> and I'm from <strong>Argentina</strong></p>
</div>
`;
const resultRandomDiv = document.querySelector('#resultRandom');

