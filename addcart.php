<?php 

include 'header.php';
$id=$_GET['id'];

$sql="select * from users where id=".$id;
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


    if(isset($_POST['insert'])){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $prod = $_POST['prod'];
    $sql=" INSERT INTO usercart (name,price,product) 
    VALUES('$name','$price','$prod')";
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
            value="<?php echo $row['Price'] ?>"
                     id="Price" name="price" placeholder="Username">
                </div>
            </div>
             <div class="form-group col-md-6">
                    <label for="Username">Prod</label>
                    <input type="text" class="form-control"
            value="<?php echo $row['product'] ?>"
                     id="Price" name="prod" placeholder="Username">
                </div>
            </div>
            
          
            </div>
            <button type="submit" class="btn btn-primary" name="insert">Confirm Order</button>
        </form>
    </div>
</body>

</html>