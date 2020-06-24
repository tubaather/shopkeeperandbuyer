<?php 

include 'header.php';

$users=[];

$sql="select * from users";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$users[]=$row;
}


?>
    

        <div  align="center">
            
                <a href="create.php" class="pull-right">Add Product</a>
        </div>
        <div class="container">

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
        <a href="edit.php?id=<?php echo $user['id']; ?>">Edit</a>
        <a href="delete.php?id=<?php echo $user['id']; ?>">Delete</a>
    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>