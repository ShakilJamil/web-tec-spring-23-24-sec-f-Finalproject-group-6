<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliveryman Profile menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #f0f0f0;
        }

        main {
            padding: 20px;
        }

        footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
<?php include 'header.html'; ?>

<header>
    <h1>Deliveryman Profile </h1>
</header>

<nav>
    <ul>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="payments.php">Payments</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>

<main>
    <!-- PHP code to display profile information -->
    <?php
    // Simulated deliveryman data
    $deliveryman = array(
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'phone' => '123-456-7890',
        'vehicle' => 'Motorcycle',
        'location' => 'City ABC',
    );
    ?>

    <section id="profile">
        <h2>Profile Section</h2>
        <p>Name: <?php echo $deliveryman['name']; ?></p>
        <p>Email: <?php echo $deliveryman['email']; ?></p>
        <p>Phone: <?php echo $deliveryman['phone']; ?></p>
        <p>Vehicle: <?php echo $deliveryman['vehicle']; ?></p>
        <p>Location: <?php echo $deliveryman['location']; ?></p>
    </section>

    <!-- Other sections (Orders, Payments, Settings) can be added similarly -->
</main>

<footer>
    <p>&copy; <?php echo date('Y'); ?> Your Delivery Company. All rights reserved.</p>
</footer>
<p><a href="dashboard_1.php" class="back-btn">Back to Dashboard_1</a></p>

<?php include 'footer.html'; ?>
</body>
</html>
