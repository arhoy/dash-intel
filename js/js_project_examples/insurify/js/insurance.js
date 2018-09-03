class Insurance{
    constructor(make,year,type){
        this.make = make;
        this.year = year;
        this.type = type;
    }
    // pass the insurance object into calculateQuote.
    calculateQuote(insurance){
        // set the base price for the quote
        let price = 2000;
     
            // 1. calculate price based on the make
            price = insurance.calculateQuoteMake(price,insurance.make);
            // 2. calculate price based on the year
            price = insurance.calculateQuoteYear(price,0.015);
            // 3. calculate price based on the type
            price = insurance.calculateQuoteLevel(price,insurance.type);
            
 
        // return the price
        return price;
    }

    calculateQuoteLevel(price,type){
        if (type === 'comprehensive'){
            price = price * 1.3;
        }
        else if(type === 'intermediate'){
            price = price * 1.2;
        }
        else{
            price = price *0.9;
        }
        return price;
    }


    calculateQuoteYear(price,discountYearFactor){
        const currentYear = (new Date()).getFullYear();
        price = price*(1-discountYearFactor)**(currentYear - this.year);
        return price;
    }

    //calculate insurance quote helper function
    calculateQuoteMake(price,make){
        if (make === 'GM'){
            price = price*1.05;
        }
        else if (make === 'Ford'){
            price = price*1.07;
        }
        else if (make === 'Lincoln'){
            price = price*1.10;
        }
        else if (make === 'Honda'){
            price = price*1.03;
        }
        else if (make === 'Toyota'){
            price = price*1.01;
        }
        else if (make === 'BMW'){
            price = price*1.20;
        }
        else if (make === 'Audi'){
            price = price*1.22;
        }
        else if (make === 'VW'){
            price = price*1.14;
        }
        else{
            price = price*1.0
        }


        return price;
    }

    
}

