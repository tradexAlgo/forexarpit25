function Myfun(id){
    var symbolX= document.getElementById(id).getAttribute('data-value');
    var user_symbol= document.getElementById('user_symbol').value=symbolX;
    createchart(symbolX)
    }
    
    
    function start_order(){
        var user_symbol= document.getElementById('user_symbol').value;
        var user_price= document.getElementById('user_price').value;
    
        console.log(user_symbol) ;
        
        // Construct the API URL
    
        const apiKey = 'iqwvR_DHk65BBtUABtBe';
        const apiUrl = `https://marketdata.tradermade.com/api/v1/live?api_key=${apiKey}&currency=${user_symbol}`;
        
        // Make a GET request using fetch:
        fetch(apiUrl)
          .then(response => {
            if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            // Access the exchange rate values, e.g. BTC:
        
            const coinSymbol = user_symbol; // Replace with the symbol you want to access
        if (data.rates.hasOwnProperty(coinSymbol)) {
        const bidValue = data.quotes[0].bid;

    var coin= document.getElementById('coin').innerHTML=data.bidValue;
    var coins_purchase=user_price/coinValue;
    
          console.log(`1 ${coinSymbol} = ${coinValue} ${data.target}`);
    var open_price= document.getElementById('symbol_open_price').value=coinValue;
    var purchase= document.getElementById('purchase').textContent=coins_purchase + " " + coinSymbol ;





    
    fetch(apiUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error(`Network response was not ok (Status: ${response.status})`);
        }
        return response.json();
      })
      .then(data => {
        // Handle the JSON response data here
        const bidValue = data.quotes[0].bid;
    console.log(bidValue);
      })
      .catch(error => {
        // Handle any errors that occurred during the fetch
        console.error('Fetch Error:', error);
      });
        
        
        } else {
          console.log(`Coin with symbol ${coinSymbol} not found.`);
        }
          })
          .catch(error => {
            console.error('Error fetching data:', error);
          });
    }
    
    
    
    function calculate_profit(){
    
        // console.log(order_symbols);
        for (let i = 0; i < order_symbols.length; i++) {
            const user_symbols = order_symbols[i].symbols;
            // const order_id = order_symbols[i].id;
            const user_open_price = order_symbols[i].open;
            const amount_pay = order_symbols[i].pay;
            const endpoint = 'live';
        
    
            const accessKey = '2981b82b7d5ed271200f25925cbcdedf';
            const apiUrl = `http://api.coinlayer.com/api/${endpoint}?access_key=${accessKey}`;
            // console.log("Users Symbols are --->> "  +   user_symbols + " and open price is  "  +user_open_price);
            var coinValue;
            console.log("Users Symbols are --->> "  +   user_symbols + " and open price is  "  +user_open_price+ " Coin Value = " +  coinValue);
        
               fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
          }
          return response.json();
        })
        .then(data => {
          // Access the exchange rate values, e.g. BTC:
      
          const coinSymbol = user_symbols; // Replace with the symbol you want to access
    
      if (data.rates.hasOwnProperty(coinSymbol)) {
        var coinValue = data.rates[coinSymbol];
        var order_id = order_symbols[i].id;
       
       
    
          var Cryptocurrency_held=amount_pay/user_open_price;
    
        var Investment = user_open_price*Cryptocurrency_held
    
        var current_value=Cryptocurrency_held*coinValue;
            
        var profit=current_value-Investment;
    // current =  26584.009571
    // Open Price   = 26584.647586
    var cal1=coinValue*Cryptocurrency_held;
    var cal2 = user_open_price* Cryptocurrency_held;
    var cal3=cal1-cal2;
        // var profit= (coinValue*Cryptocurrency_held)-(user_open_price* Cryptocurrency_held)-50;
        var profit= cal3;
        // (994.117)                                  -           1010.216607
    // profit = (sp-bp)*crypto-50;
    // profit=-3.637876*0.038
        // console.log("Crypto Held "  +   Cryptocurrency_held + " and investment is   "  +Investment);
    // 98.83150341190309
    
    
    
    
    // coin_value=26160.993667;
    // open_price=26584.647586;
    
    
    // coinValue*Cryptocurrency_held=994.117;
    // user_open_price* Cryptocurrency_held=1010.216607;
    // user_open_price* Cryptocurrency_held(22584.647586)=860.47050;
    
    
        console.log("Current Value "  +   coinValue + " and profit is   "  +profit);
        let element = document.getElementById('cryptocoin_' + order_id);
        element.textContent=profit;
    
    
        let element2 = document.getElementById('current_' + order_id);
        element2.value=coinValue;
    
    
        // Step 2: Set the value of the data-value attribute
        element.setAttribute("data-value",profit);
    
        element2.setAttribute("data-value",coinValue);
    
        // element.textContent=profit.toFixed(2);
    
    
    
    
    
    
    
    
      } else {
        console.log(`Coin with symbol ${coinSymbol} not found.`);
      }
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    
        
        }
    }
    
    setInterval(calculate_profit,2000);
    
    
    function stop_order(order_id){
    
    console.log("Order ID = " + order_id);
    let element = document.getElementById('cryptocoin_' + order_id);
    
    
    let close = document.getElementById('current_' + order_id).value;
    
    // Step 2: Set the value of the data-value attribute
    var profit=element.getAttribute("data-value");
    
    
    var input=document.getElementById('profit_' + order_id).value=profit;
    console.log("Input ID  = " + input);
    
    
    const url = `/update/${order_id}`; // Replace resourceId with the actual ID
    const data = {
        key1: input,
        key2: close,
    };
    console.log(input);
    // Send a PUT request using fetch
    fetch(url, {
      method: 'PUT',
      headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN':  document.getElementById('csrf').value, // Replace csrfToken with your CSRF token
      },
      body: JSON.stringify(data),
    })
      .then(response => {
          if (!response.ok) {
              throw new Error(`HTTP error! Status: ${response.status}`);
          }
          // return response.json();
    
          window.location.href = '/dashboard';
      })
      .then(data => {
          // Handle the response data here
          console.log(data);
      })
      .catch(error => {
          // Handle any errors here
          console.error(error);
      });
    
    }
    
    
    setInterval(calculate_profit,2000);