<?php

@include 'config.php';

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
<title>about</title>

<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- custom admin css file link  -->
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Choosing a floral arrangement involves considering the occasion, the recipient's preferences, and the symbolic meaning of the flowers. For example, red roses are a classic choice for Valentine's Day, symbolizing love and romance, while white lilies can be used for sympathy cards, representing purity and innocence.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We can provide examples of flowers, like roses, tulips, and sunflowers, which are all popular choices for both their beauty and use in various settings. Other examples include carnations, lilies, and daisies, showcasing the variety of shapes, colors, and scents flowers offer. </p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>Flowers, with their vibrant colors and diverse forms, represent beauty and can evoke a range of emotions in humans, similar to how humans themselves express a variety of feelings and experiences. They serve as a powerful symbol of connection, both to nature and to each other. 
            Here's a more detailed look:</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/n1.jpg" alt="">
            <p>The delivery was prompt, and the customer service was exceptional—everyone was so helpful and attentive to my needs. I will definitely be returning for more and recommending this shop to friends and family god blesss you. Ihope more client visit here! 🌺💖</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Justin jay Baldo</h3>
        </div>

        <div class="box">
            <img src="images/n4.jpg" alt="">
            <p>I recently ordered a bouquet for my friend's birthday, and I was blown away by how beautiful it was! The flowers were fresh, and the arrangement was so artistic. My friend loved it, and it made her day extra special. I’ll definitely be back for more!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Samantha Galapate</h3>
        </div>

        <div class="box">
            <img src="images/n6.jpg" alt="">
            <p>I’ve purchased flowers from this shop multiple times, and each experience has been fantastic. Whether it’s for a wedding, a thank-you gift, or just because, their flowers always impress. The staff is knowledgeable and helped me choose the perfect arrangement every time!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Gia Bayang</h3>
        </div>

        <div class="box">
            <img src="images/n3.jpg" alt="">
            <p>I ordered a floral centerpiece for a dinner party, and it was the highlight of the table! The colors were vibrant, and the arrangement was so elegant. I received so many compliments from my guests. Thank you for making my event even more memorable!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Joyce Salo</h3>
        </div>

        <div class="box">
            <img src="images/n2.jpg" alt="">
            <p>I sent flowers to my sister just to brighten her day, and she was over the moon! The arrangement was stunning, and she couldn’t stop raving about how fresh and fragrant the flowers were. It’s wonderful to know I can count on this shop for beautiful blooms!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Edrian Prones</h3>
        </div>

        <div class="box">
            <img src="images/n5.jpg" alt="">
            <p>I had a last-minute request for a bouquet, and the team went above and beyond to accommodate me. The flowers were gorgeous and delivered on time. I truly appreciate the excellent customer service and the quality of the flowers. Highly recommend!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kenneth Baldomar</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>