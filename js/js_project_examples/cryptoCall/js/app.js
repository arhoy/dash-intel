// note script type must be module in the app.js import on the index file
    import {UI,DOM} from './ui.js';
    import { API } from './api.js';
// declare classes that was imported.
    const ui = new UI();
    const api =  new API();

// add eventListener
    DOM.form.addEventListener('submit',submitForm);

// get the list of cryptocurrency on pageload
    ui.printCrypto();

// main function calling the UI and API class in one
function submitForm(e){
    e.preventDefault();

    // check to see if form is valid
    if(DOM.crypto.value === '' || DOM.currency.value === ''){
        ui.printError(DOM.result);
    }
    else{
        ui.printResult(DOM.result);
    }
}

// print year to UI
ui.printYear();

