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
var apiUrl=`https://api.coincap.io/v2/assets/${apiKey}",${requestOptions}`;
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