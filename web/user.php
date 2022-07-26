
<?php
require_once("header.php");
?>

<body>

    <?php
    require_once("nav.php");
    ?>

    <div class="w3-container"  style="margin-left:200px">
            <section class="booking">
                <h3 >ข้อมูลส่วนตัว</h3>
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
                </form>

            </section>

            <section class="services">
                <h3 >PORTFOLIO OF MAJOR</h3>
                    <div class="box-container">

                        <div class="box">
                            <div id="myBtn">
                                <img src="images/icon-1.png" alt="">
                                <h3 >วิศวกรรมโยธา</h3>
                            </div>
                            <!-- The Modal -->
                            <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <span class="close">&times;</span>
                                        <h2>Modal Header</h2>
                                    </div>
                                    <div class="modal-body">
                                        <p>Some text in the Modal Body</p>
                                        <p>Some other text...</p>
                                    </div>
                                    <div class="modal-footer">
                                        <h3>Modal Footer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="box">
                            <img src="images/icon-2.png" alt="">
                            <h3>วิศวกรรมไฟฟ้า</h3>
                        </div>

                        <div class="box">
                            <img src="images/icon-3.png" alt="">
                            <h3>ปิโตรเคมีและพอลิเมอร์</h3>
                        </div>

                    </div>
                   
                    <div class="box-container">
                        <div class="box">
                            <img src="images/icon-4.png" alt="">
                            <h3>วิศวกรรมเครื่องกลและหุ่นยนต์</h3>
                        </div>

                        <div class="box">
                            <img src="images/icon-5.png" alt="">
                            <h3>วิศวกรรมคอมพิวเตอร์และปัญญาประดิษฐ์</h3>
                        </div>

                        <div class="box">
                            <img src="images/icon-6.png" alt="">
                            <h3>วิศวกรรมเคมีและเคมีเภสัชกรรม</h3>
                        </div>

                    </div>

            </section>
    </div>
    


    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
        modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
        modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
    </script>
       
        
</body>
</html>