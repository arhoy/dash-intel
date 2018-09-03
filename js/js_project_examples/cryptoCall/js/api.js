// api key: 5670fad7-7126-4e33-b4b2-9874183731e8
export class API{
    constructor(){
   
    }

    // get all the cryptocurrencies
    async getCrypto(){
        const url = await fetch(`https://api.coinmarketcap.com/v1/ticker/`);
        const res = await url.json();
        return{
            res
        }
       
        
        
    }


    // cryptocurrency convertor
    async queryAPI(crypto,currency){
        const url = await fetch(`https://api.coinmarketcap.com/v1/ticker/${crypto}/?convert=${currency}`);
        const res = await url.json();
        return {
            res
        }
    }
}