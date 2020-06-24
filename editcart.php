<?php 

include 'header.php';
$id=$_GET['id'];

$sql="select * from usercart where id=".$id;
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $Price = $_POST['price'];
        $Prod = $_POST['product'];
       

    $sql = "UPDATE usercart set name='$name',price='$Price',product='$Prod' where id=".$id;

    $result = mysqli_query($con,$sql);
        if($result){
            header("location:view_cart.php");
        }else{
            echo mysqli_error($con);
        }
    }
?>

    <div class="container">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" 
                    value="<?php echo $row['name'] ?>" 
                    id="Name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="Username">Price</label>
                    <input type="text" class="form-control"
            value="<?php echo $row['price'] ?>"
                     id="Price" name="price" placeholder="Username">
                </div>
            </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Image</label>
                    <form action="" method="post" enctype="<?php echo $row['multipart/form-data']?>">
                    <input type="file" name="product" />

                </div>
            </div>
            
             

    

                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>

</html>