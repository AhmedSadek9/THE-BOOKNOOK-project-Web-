<?php
include 'config.php';
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css?v=time()">
</head>
<body>
    <?php include 'header.php';?>
    <div class="heading-1">
        <h3>About Us</h3>
        <p><a href="home.php">Home</a> / About</p>
    </div>
    <section class="about">
        <div class="flex">
            <div class="image">
                <img src="about-img.jpg" alt="">
            </div>
            <div class="content">
                <h3>Why Choose Us?</h3>
                <p>At BookNook, we specialize in curating the best selection of scientific books focused on Computer Science and technology. As a team of Computer Science students, we understand the importance of high-quality, up-to-date resources for learning and research.</p>
                <p>Our platform offers a carefully curated collection of textbooks, research papers, and reference materials, all designed to support your academic and professional growth. We prioritize accessibility and affordability, making it easy for students, professionals, and enthusiasts alike to find the resources they need. Choose BookNook for a trusted, technology-driven source of knowledge in the ever-evolving field of Computer Science.</p>
                <a href="contact.php" class="btn">Contact Us</a>
            </div>
        </div>
    </section>
    <section class="reviews">
        <h1 class="title">Client's Reviews</h1>
        <div class="box-container">
            <div class="box">
                <img src="people images/pic-1.png" alt="">
                <p>I’ve found so many great books on BookNook! The selection is diverse, and the site is easy to navigate. Definitely my new go-to for all my reading needs.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <h3>Abdelrahman Osama</h3>
            </div>
            <div class="box">
                <img src="people images/pic-2.png" alt="">
                <p>I love how easy it is to find my next read on BookNook. Whether I’m in the mood for a thrilling mystery or a heartwarming novel, they always have something perfect for me.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Ahmed Mohamed</h3>
            </div>
            <div class="box">
                <img src="people images/pic-3.png" alt="">
                <p>I love how quickly I can find my next read on BookNook. Their variety of genres keeps me coming back. Great prices and fast delivery! great website!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>May Moustafa</h3>
            </div>
            <div class="box">
                <img src="people images/pic-4.png" alt="">
                <p>I’m not an avid reader, but BookNook has introduced me to some amazing books. They offer everything from bestsellers to hidden gems. The shopping experience is always seamless and enjoyable.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half"></i>
                </div>
                <h3>Zahraa Hassan</h3>
            </div>
            <div class="box">
                <img src="people images/pic-5.png" alt="">
                <p>Our book club has used BookNook several times for our reading selections, and we’ve always been impressed. They have a wide variety of books, from fiction to children’s titles. The shipping is always fast and reliable!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Zein Zahran</h3>
            </div>
            <div class="box">
                <img src="people images/pic-6.png" alt="">
                <p>I’ve been using BookNook for months now, and I’m never disappointed. They have a wide variety of genres, and I love how easy it is to find what I’m looking for. Shipping is always fast, too! Amazing website!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>Camilia Ihab</h3>
            </div>
        </div>
    </section>
    <section class="authors">
        <h1 class="title">Great Authors</h1>
        <div class="box-container">
            <div class="box">
                <img src="author images/author-1.png" alt="">
                <div class="share">
                <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i>  </a>
            <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i>  </a>
            <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin"></i>  </a>
                </div>
                <h3>Richard Dawkins</h3>
            </div>
            <div class="box">
                <img src="author images/author-2.png" alt="">
                <div class="share">
                <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i>  </a>
            <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i>  </a>
            <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin"></i> </a>
                </div>
                <h3>Ada Lovelace</h3>
            </div>
            <div class="box">
                <img src="author images/author-3.png" alt="">
                <div class="share">
                <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i>  </a>
            <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i>  </a>
            <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin"></i> </a>
                </div>
                <h3>Marie Curie</h3>
            </div>
            <div class="box">
                <img src="author images/author-4.png" alt="">
                <div class="share">
                <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i>  </a>
            <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i>  </a>
            <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin"></i> </a>
                </div>
                <h3>Vikram Sarabhai</h3>
            </div>
            <div class="box">
                <img src="author images/author-5.png" alt="">
                <div class="share">
                <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i>  </a>
            <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i>  </a>
            <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin"></i> </a>
                </div>
                <h3>Dina Katbi</h3>
            </div>
            <div class="box">
                <img src="author images/author-6.png" alt="">
                <div class="share">
                <a href="https://www.facebook.com" target="_blank"> <i class="fab fa-facebook-f"></i>  </a>
            <a href="https://www.twitter.com" target="_blank"> <i class="fab fa-twitter"></i>  </a>
            <a href="https://www.instagram.com" target="_blank"> <i class="fab fa-instagram"></i>  </a>
            <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin"></i> </a>
                </div>
                <h3>Stephen Hawking</h3>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
    <script src="script.js"></script>
</body>
</html>