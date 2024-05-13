<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery History</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php include 'header.html'; ?>

<div class="container">
    <h1>Delivery History</h1>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Recipient</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>001</td>
                <td>2024-05-01</td>
                <td>Delivered</td>
                <td>RAAJ</td>
                <td>KURIL</td>
            </tr>
            <tr>
                <td>002</td>
                <td>2024-05-05</td>
                <td>Out for Delivery</td>
                <td>ALIN</td>
                <td>AGRABAD,CTG</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
<p><a href="dashboard_1.php" class="back-btn">Back to Dashboard_1</a></p>

<?php include 'footer.html'; ?>
</body>
</html>
