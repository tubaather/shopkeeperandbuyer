<?php 
include 'header.php';

if(isset($_POST['insert'])){
    $name=$_POST['name'];
    $C_name=$_POST['C_name'];
    $Price=$_POST['Price'];
    $password=$_POST['password'];
    $status=$_POST['status'];
    $product=$_POST['product'];

    $sql=" INSERT INTO users (name,Price,password,C_name,status,product) 
    VALUES('$name','$Price','$password','$C_name','$status','$product')";

    $result = mysqli_query($con,$sql);
    if($result){
        echo "Inserted";
    }else{
        echo mysqli_error($con);
    }



}


?>
    <div class="container">
        <form method="post" action="">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="Username">Price</label>
                    <input type="text" class="form-control" name="Price" id="Price" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Company Name</label>
                    <input type="name" class="form-control" name="C_name" id="C_name" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Status</label>
                    <select type="email" class="form-control" name="status">
                        <option value="">Select Status</option>
                        <option value="InStock">InStock</option>
                        <option value="OutofStock">OutofStock</option>
                    </select>

                </div>
            </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Image</label>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="product" />

                </div>
            </div>
            <input type="submit" name="insert" class="btn btn-primary">
        </form>
    </div>
</body>

</html>