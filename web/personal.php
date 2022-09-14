
<?php
require_once("header.php");
?>


<body>

    <?php
    require_once("ad-nav.php");
    ?>
   

    <div class="w3-container"  style="margin-left:200px">
            <section class="booking">
                <h3>USER MANAGEMENT</h3>
                <form action="book_form.php" method="post" class="book-form">
                    <table class='table table-bordered tablesorter'>
                    <thead>
                    <tr>
                    <td align='center'><strong>ชื่อ </strong></td>
                    <td align='center'><strong>User name </strong></td>
                    <td align='center'><strong>User password </strong></td>
                    <td width="5%"></td>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php
                    $alluser = getUser($_SESSION["id"]);
                    ?>
                    
                    <tr valign='top'>
                    <td align='center'><?php echo $alluser['firstname'] ?></td>
                    <td align='center'><?php echo $alluser['username'] ?></td>
                    <td align='center'><?php echo $alluser['password'] ?></td>
                    <td align="center">
                    <!-- <a href="user.php?submit=Edit&Select_ID=<?php echo $autoid;?>"  title='Edit' class='btn btn-warning btn-xs'>Edit</a>&nbsp;&nbsp; -->
                    </td>
                    </tr>
                    </tbody>
                    </table>
                    

                </form>

            </section>
    </div>
    

   
       
        
</body>
</html>