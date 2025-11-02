<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Emails</title>
	<style>
		/* Add styles for the email here */
		body {
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			background-color: #f7f7f7;
		}
		.container {
			max-width: 600px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
		}
		.heading {
			font-size: 24px;
			font-weight: bold;
			margin: 0 0 20px;
		}
		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #000000;
			color: #fff;
			text-decoration: none;
			border-radius: 5px;
			transition: background-color 0.2s ease-in-out;
		}
		.btn:hover {
			background-color: #09b300;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="heading">Welcome to Forex Infotech</h1>
		<p>Hi  {{$details['name']}} Please Enter the login otp from below </p>
	<ul>
        <li>Login OTP :{{$details['otp']}}</li>
    </ul>
		{{-- <p>If you have any questions or concerns, please don't hesitate to contact us.</p> --}}
	</div>
</body>
</html>
