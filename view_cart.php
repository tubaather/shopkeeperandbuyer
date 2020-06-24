<?php 

include 'header.php';

$usercart=[];

$sql="select * from usercart";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$usercart[]=$row;
}


?>
    

        <div  align="center">
            
                <h3> User Cart </h3>
                <?php
                $sql="select SUM(price) as `sumprice` from usercart";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>
<h4 style="color: red" align="center">SUM TOTAL OF CART: <?php echo ":".$row['sumprice'];?></h4
        </div>
        <div class="container">

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>product</th>
                    
                </tr>
            </thead>
            <tbody>
         <?php 
            foreach($usercart as $user){
         ?>

                <tr>
    <td><?php echo $user['id']; ?></td>
    <td><?php echo $user['name']; ?></td>
    <td><?php echo $user['price']; ?></td>
   
   
   <td> <img src="<?php echo (!empty($user['product'])) ? 'images/'.$user['product'] : 'images/noimage.jpg'; ?>" width="50%" height="30%" class="zoom" data-magnify-src="images/large-<?php echo $user['product']; ?>"></td>
                            <br><br>
                            <td>
        <a href="editcart.php?id=<?php echo $user['id']; ?>"><h3 style="color:red">Update Cart</a></h3>
        <br>
        <a href="deletecart.php?id=<?php echo $user['id']; ?>"><h3 style="color:red">Delete Product</a></h3>
    </td>
   
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>