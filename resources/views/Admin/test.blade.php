<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 id="btc"></h1>

    <script>

var requestOptions = {
  method: 'GET',
  redirect: 'follow'
};
var="USDT"
// var apiUrl=`https://rest.coincap.io/v3/assets?apiKey=b405c2aa467722f3586f45bf8d4f1efac2abb09d2cb1b664783ea90da84c7f28",${requestOptions}/;
var apiUrl=`https://api.allorigins.win/raw?url=https://query2.finance.yahoo.com/v1/finance/search?q=${requestOptions}`;
fetch(apiUrl)
    .then(response => {
    if (!response.ok) {
    throw new Error(`Network response was not ok (Status: ${response.status})`);
    }
    return response.json();
    })
    .then(data => {
    console.log(data);








       
    
 
    
    })
    .catch(error => {
    // Handle any errors that occurred during the fetch
    console.error('Fetch Error:', error);
    });
    </script>
</body>
</html>