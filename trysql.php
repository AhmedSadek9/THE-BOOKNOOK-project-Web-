<?php
$servername = "localhost"; 
$username = "root";        
$password = "";   
$dbname=  "shop_db";        
// Create connection to the database server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE shop_db";

if ($conn->query($sql) === TRUE) {
    echo "Database 'shop_db' created successfully!";
} else {
    echo "Error creating database: " . $conn->error;
}


// SQL query to create the table cart 
$sql = "CREATE TABLE `cart` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `price` int(11) NOT NULL,
    `quantity` int(11) NOT NULL,
    `image` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'cart' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}



$sql = "CREATE TABLE `message` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `number` varchar(12) NOT NULL,
    `message` varchar(500) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'message' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}



// SQL query to create the `orders` table
$sql_orders = "CREATE TABLE `orders` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL,
    `name` varchar(100) NOT NULL,
    `number` varchar(12) NOT NULL,
    `email` varchar(100) NOT NULL,
    `method` varchar(50) NOT NULL,
    `address` varchar(500) NOT NULL,
    `total_products` varchar(1000) NOT NULL,
    `total_price` int(11) NOT NULL,
    `placed_on` varchar(50) NOT NULL,
    `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

// SQL query to create the `products` table
$sql_products = "CREATE TABLE `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `price` int(11) NOT NULL,
    `image` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

// Execute the queries
if ($conn->query($sql_orders) === TRUE) {
    echo "Table 'orders' created successfully!<br>";
} else {
    echo "Error creating 'orders' table: " . $conn->error . "<br>";
}

if ($conn->query($sql_products) === TRUE) {
    echo "Table 'products' created successfully!<br>";
} else {
    echo "Error creating 'products' table: " . $conn->error . "<br>";
}



// SQL query to create the `users` table
$sql = "CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `user_type` varchar(20) NOT NULL DEFAULT 'user',
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'users' created successfully!";
} else {
    echo "Error creating 'users' table: " . $conn->error;
}

$conn->close();
?>
