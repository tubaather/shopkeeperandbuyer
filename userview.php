<?php 

include 'header.php';

$users=[];

$sql="select * from users";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$users[]=$row;
}


?>
    
<?php



$sql="select SUM(price) as `sumprice` from usercart";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);


?>
<h4 style="color: red" align="center">SUM TOTAL OF CART: <?php echo ":".$row['sumprice'];?></h4> 

        <div  align="center">
            
        </div>
        <div class="container">
            <a href="view_cart.php"><h4 style="color: red;"> View Cart</h4></a>

        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Company</th>
                    <th>Status</th>
                    <th>product</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
         <?php 
            foreach($users as $user){
         ?>

                <tr>
    <td><?php echo $user['id']; ?></td>
    <td><?php echo $user['name']; ?></td>
    <td><?php echo $user['Price']; ?></td>
    <td style="font-weight: bold;color: red;"><?php echo $user['C_name']; ?></td>
    <td><?php echo $user['status']; ?></td>
   <td> <img src="<?php echo (!empty($user['product'])) ? 'images/'.$user['product'] : 'images/noimage.jpg'; ?>" width="50%" height="30%" class="zoom" data-magnify-src="images/large-<?php echo $user['product']; ?>"></td>
                            <br><br>
    <td>
        <a href="addcart.php?id=<?php echo $user['id']; ?> "><h4 style="color: red;"> BUY</h4></a>
       
    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>