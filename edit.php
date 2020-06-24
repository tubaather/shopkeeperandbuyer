<?php 

include 'header.php';
$id=$_GET['id'];

$sql="select * from users where id=".$id;
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $Price = $_POST['Price'];
        $C_name = $_POST['C_name'];
        $status = $_POST['status'];

    $sql = "UPDATE users set name='$name',Price='$Price',C_name='$C_name',status='$status' where id=".$id;

    $result = mysqli_query($con,$sql);
        if($result){
            header("location:view_user.php");
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
                     id="Price" name="Price" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Company Name</label>
                    <input type="text" class="form-control" id="inputEmail4"
                    value="<?php echo $row['C_name'] ?>"
                     placeholder="C_name" name="C_name">
                </div>
                <div class="form-group col-md-6">
                  
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Status</label>
                    <select type="email" name="status" class="form-control" id="inputStatus" 
                     placeholder="Email">
        <option value="">Select Status</option>
        <option <?php if($row['status']=='InStock') echo "selected"; ?>  value="Active">Active</option>
        <option <?php if($row['status']=='OutofStock') echo "selected"; ?>   value="Inactive">Inactive</option>
                    </select>

                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>

</html>