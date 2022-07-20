
<?php
require_once("header.php");
?>

<body>

    <?php
    require_once("nav.php");
    ?>
 
    <div class="w3-container"  style="margin-left:200px">
        <section class="services">

            <div class="box-container">

                <div class="box" id="myBtn">
                    <img src="images/icon-1.png" alt="">
                    <h3>วิศวกรรมโยธา</h3>
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
        function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        }
    </script>
       
        
</body>
</html>