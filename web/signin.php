<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">engineer portfoilo</a>

    <nav class="navbar">
    <a href="home.php">หน้าแรก</a>
    <a href="https://engineer.wu.ac.th/?page_id=15080" target="_blank">หลักสูตร</a>
    <a href="https://engineer.wu.ac.th/?page_id=6767" target="_blank">บุคลากร</a>
    <a href="book.php">ติดต่อ</a>
    <a href="signin.php">Sign In</a>
    <a href="signup.php">Sign Up</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->


<!-- booking section starts  -->

<section class="booking">
    
    <h1 class="heading-title">Sign in</h1>
   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>password :</span>
            <input type="password" placeholder="enter your password" name="password">
         </div>
         
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>