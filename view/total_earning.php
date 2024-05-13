<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Earnings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
        }

        .earning {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .earning strong {
            color: #007bff;
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include 'header.html'; ?>
<div class="container">
    <h1>Total Earnings</h1>
    <div class="earning">
        Total Earnings: <strong>$500</strong>
    </div>
    <button class="button">View Details</button>
</div>
<p><a href="dashboard_1.php" class="back-btn">Back to Dashboard_1</a></p>

<?php include 'footer.html'; ?>
</body>
</html>
