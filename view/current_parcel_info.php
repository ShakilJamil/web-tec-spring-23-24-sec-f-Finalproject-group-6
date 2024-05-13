<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Parcel Information</title>
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
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .parcel-info {
            margin-bottom: 20px;
        }

        .parcel-info label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .parcel-info p {
            margin: 0;
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 0 auto;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php include 'header.html'; ?>


<div class="container">
    <h1>Current Parcel Information</h1>
    <div class="parcel-info">
        <label for="parcel-id">Parcel ID:</label>
        <p id="parcel-id">123456</p>
    </div>
    <div class="parcel-info">
        <label for="sender">Sender:</label>
        <p id="sender">RAAJ</p>
    </div>
    <div class="parcel-info">
        <label for="receiver">Receiver:</label>
        <p id="receiver">alin</p>
    </div>
    <div class="parcel-info">
        <label for="status">Status:</label>
        <p id="status">In Transit</p>
    </div>
    <button class="button">Update Status</button>
</div>
<p><a href="dashboard_1.php" class="back-btn">Back to Dashboard_1</a></p>

<?php include 'footer.html'; ?>
</body>
</html>
