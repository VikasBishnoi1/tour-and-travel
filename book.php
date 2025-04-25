<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book | Travel</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="header">
   <a href="home.php" class="logo">travel.</a>
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="logout.php">Log out</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- Page Heading -->
<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- Booking Section Starts -->
<section class="booking">
   <h1 class="heading-title">Book Your Trip!</h1>
   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter your email" name="email"required>
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="number" placeholder="Enter your number" name="phone"required>
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="Enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>Where To :</span>
            <input type="text" placeholder="Place you want to visit" name="location" required>
         </div>
         <div class="inputBox">
            <span>How Many :</span>
            <input type="number" placeholder="Number of guests" name="guests"required>
         </div>
         <div class="inputBox">
            <span>Arrivals :</span>
            <input type="date" name="arrivals" >
         </div>
         <div class="inputBox">
            <span>Leaving :</span>
            <input type="date" name="leaving" >
         </div>
      </div>
      <input type="submit" value="Submit" class="btn" name="send" id="submit">
   </form>
</section>
<!-- Booking Section Ends -->

<!-- Footer Section Starts -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>
      <div class="box">
         <h3>Extra Links</h3>
         <a href="ask.php"> <i class="fas fa-angle-right"></i> Give review</a>
         <a href="#"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of Use</a>
      </div>
      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Mumbai, India - 400104 </a>
      </div>
      <div class="box">
         <h3>Follow Us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> LinkedIn </a>
      </div>
   </div>
   <div class="credit"> Created by <span>Mr. Web Designer</span> | All Rights Reserved! </div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
   const form = document.querySelector('.book-form'); // Select the form element
if (form) {
   form.addEventListener('submit', function (event) {
      alert("Form submitted successfully!");
   });
}
</script>

</body>
</html>