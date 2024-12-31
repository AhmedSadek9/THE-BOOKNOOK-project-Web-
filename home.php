<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
}
if(isset($_POST['add_to_cart'])){
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];
    $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
    if(mysqli_num_rows($check_cart_numbers) > 0){
        $message[] = 'already added to cart';
    }
    else{
        mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
        $message[] = 'product added to cart!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css?v=time()">
</head>
<body>
    <?php include 'header.php';?>
    <section class="home">
        <div class="content">
            <h3>Hand Picked Book to your door.</h3>
            <p>Discover stories that inspire, classics that endure, and books that ignite your imagination. Start your next great journey with us today!</p>
            <a href="about.php" class="white-btn">Discover More</a>
        </div>
    </section>
    <section class="products">
        <h1 class="title">Latest Products</h1>
        <div class="box-container">
            <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
                if(mysqli_num_rows($select_products) > 0){
                    while($fetch_products = mysqli_fetch_assoc($select_products)){
            ?>
            <form action="" method="post" class="box">
                <img src="<?php echo $fetch_products['image']; ?>" alt="">
                <div class="name"><?php echo $fetch_products['name']; ?></div>
                <div class="price">$<?php echo $fetch_products['price']; ?>/-</div>
                <input type="number" min="1" name="product_quantity" value="1" class="qty">
                <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
                <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
                <input type="submit" value="add to cart" name="add_to_cart" class="btn">
            </form>
            <?php
                    }
                }
                else{
                    echo '<p class="empty">No Products Added Yet!</p>';
                }
            ?>
        </div>
        <div class="load-more" style="margin-top: 2rem; text-align: center;">
            <a href="shop.php" class="option-btn">Load More</a>
        </div>
    </section>
    <section class="about">
        <div class="flex">
            <div class="image">
                <img src="about-img.jpg" alt="">
            </div>
            <div class="content">
                <h3>About Us</h3>
                <p>We are a team of five passionate Computer Science students who turned our love for books and technology into this project. Our goal is to create a seamless online bookstore experience, combining innovation with the joy of reading. Join us as we bridge the gap between tech and storytelling!</p>
                <a href="about.php" class="btn">Read More</a>
            </div>
        </div>
    </section>
    <section class="home-contact">
        <div class="content">
            <h3>Have Any Questions?</h3>
            <p>We’re here to help! Whether you're looking for the perfect book, need assistance with your order, or have any other inquiries, our team at BookNook is ready to assist you. Feel free to reach out, and we'll get back to you as quickly as possible. Your satisfaction is our priority!</p>
            <a href="contact.php" class="white-btn">Contact Us</a>
        </div>
    </section>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>