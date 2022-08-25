<?php
 
$dataPoints = array( 
	array("y" => 2, "label" => "p1" ),
	array("y" => 1, "label" => "p2" ),
	array("y" => 0, "label" => "p3" ),
	
);
 
?>
<?php
require_once("header.php");
?>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "กราฟที่สร้าง"
	},
	axisY: {
		title: "จำนวนกราฟที่สร้าง(ครั้ง)"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## ครั้ง",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<body>

    <?php
    require_once("ad-nav.php");
    ?>
   

    <div class="w3-container"  style="margin-left:200px">
            <section class="booking">
                <h3>Dashboard</h3>
                <form action="book_form.php" method="post" class="book-form">

                    <div class="flex">

                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    
                      
                        
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