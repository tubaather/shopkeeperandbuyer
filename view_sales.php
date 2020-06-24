<?php 

include 'header.php';

$sale=[];

$sql="select * from sale";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
$sale[]=$row;
}


?>
    

        <div  align="center">
            
                
               <h2 style="color:red"> SALES OF THE DAY </h2>

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
            foreach($sale as $sales){
         ?>

                <tr>
    <td><?php echo $sales['id']; ?></td>
    <td><?php echo $sales['name']; ?></td>
    <td><?php echo $sales['price']; ?></td>
   <td> <img src="<?php echo (!empty($sales['prod'])) ? 'images/'.$sales['prod'] : 'images/noimage.jpg'; ?>" width="50%" class="zoom" data-magnify-src="images/large-<?php echo $sales['prod']; ?>"></td>
                            <br><br>
    <td>
       
        <a href="delsaleday.php?id=<?php echo $sales['id']; ?>">Delete</a>
    </td>
                </tr>

            <?php } ?>

            </tbody>
        </table>

    </div>
</body>

</html>