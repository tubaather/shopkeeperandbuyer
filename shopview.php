<?php 

include 'header.php';

?>
<form action="search.php" method="post">
                <input type="text" name="search" placeholder="search for Products">
                <input type="submit" value="search">
</form>

    <div class="container" align="center">

    	<h3> Number of Products In Stock Right Now:  <?php
        $sql="select count(*) as total from users";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
echo $data['total'];?></h3>
    	

<h3 align="center" style="color: red"> Click Below For Available Products View</h3>
 <a href="http://localhost/phpmysq/phpmysql/view_user.php"><img src="images/head.jpg" align="center" style="width: 50%"></a>
    </div>
    <h3><?php
echo date("l jS \of F Y h:i:s A");
?></h3>
    <a href="http://localhost/phpmysq/phpmysql/view_sales.php"><h2>VIEW OR DELETE SALE OF THE DAY</a></h2><br>
    <a href="http://localhost/phpmysq/phpmysql/addsaleday.php"><h3>ADD SALE OF THE DAY</a></h1><br>
   
    </div>

</body>

</html>