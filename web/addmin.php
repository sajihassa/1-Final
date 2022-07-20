<?php
require_once("header.php");
?>
<body>

    <?php
    require_once("add-nav.php");
    ?>

    <div class="w3-container"  style="margin-left:200px">
            <section class="booking">

                <form action="book_form.php" method="post" class="book-form">

                    <div class="flex">
                        <div class="inputBox">
                            <span>name :</span>
                            <input type="text" placeholder="enter your name" name="name">
                        </div>
                        <div class="inputBox">
                            <span>email :</span>
                            <input type="email" placeholder="enter your email" name="email">
                        </div>
                        <div class="inputBox">
                            <span>phone :</span>
                            <input type="number" placeholder="enter your number" name="phone">
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="enter your address" name="address">
                        </div>
                        <div class="inputBox">
                            <span>where to :</span>
                            <input type="text" placeholder="place you want to visit" name="location">
                        </div>
                        <div class="inputBox">
                            <span>how many :</span>
                            <input type="number" placeholder="number of guests" name="guests">
                        </div>
                        
                    </div>

                    <!-- <input type="submit" value="submit" class="btn" name="send"> -->

                </form>

            </section>
    </div>
    

    <script>
        function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        }
    </script>
       
        
</body>
</html>