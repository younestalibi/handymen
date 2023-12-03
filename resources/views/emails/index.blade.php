<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Notification</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Congratulations!</h1>
        <p>You have a new booking on your service. Details are as follows:</p>
        <ul>
            <li><strong>Service:</strong> {{ $data['service'] }}</li>
            <li><strong>Date:</strong> {{ $data['date'] }}</li>
            <li><strong>Customer Name:</strong> {{ $data['name'] }}</li>
            <li><strong>Customer Email:</strong> {{ $data['email'] }}</li>
            <li><strong>Customer Phone:</strong> {{ $data['phone'] }}</li>
            
        </ul>
        <p>Thank you for using our service!</p>
    </div>
</body>
</html>
