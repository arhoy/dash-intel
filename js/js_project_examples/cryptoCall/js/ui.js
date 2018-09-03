import { API } from './api.js';


export const DOM = {
    form: document.querySelector('#form'),
    crypto:document.querySelector('#crypto'),
    currency:document.querySelector('#currency'),
    result: document.querySelector('#result')
}

export class UI{
    constructor(){

    }
    printError(div){
        div.innerHTML = `<p class = "alert alert-danger"><strong>Please select a currency and/or cryptocurrency!</strong> </p>`;
    }
    printCrypto(){
        const api = new API();
        const apiPromise = api.getCrypto();
        apiPromise.then(data=>{
                    const dataArray = data.res;
                    let html = `<option value="" disabled selected>- Select Cryptocurrency -</option>`;
                    dataArray.forEach(coin => {
                        html+= `<option value = "${coin.id}">${coin.name}</option>`;
                    });
                   DOM.crypto.innerHTML = html;
                })
                .catch(err=>{console.log(err)})
    }
    printResult(div){
        const api2 = new API();
        const apiPromise = api2.queryAPI(DOM.crypto.value,DOM.currency.value);
    
        apiPromise.then(data=>{
            let curr = `price_${DOM.currency.value.toLowerCase()}`;
            const result = accounting.formatMoney(data.res[0][curr],{symbol: `${DOM.currency.value}`, format: "%v %s"});
            div.innerHTML = `<p class = "alert alert-success"> <strong>1 ${DOM.crypto.value} </strong>is <strong>${(result)}</strong><p>`;
            
        })
    }   
    printYear(){
        document.querySelector('.printtheYear').innerHTML = `<span> ${(new Date()).getFullYear()}</span>`
    }
}