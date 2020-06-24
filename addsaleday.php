<?php 
include 'header.php';

if(isset($_POST['Add'])){
    $name=$_POST['name'];
    $id=$_POST['id'];
    $price=$_POST['price'];
    $prod=$_POST['prod'];

    $sql=" INSERT INTO sale (name,id,price,prod) 
    VALUES('$name','$id','$price','$prod')";

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
                    <label for="Username">ID</label>
                    <input type="text" class="form-control" name="id" id="id" placeholder="id">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Price</label>
                    <input type="name" class="form-control" name="price" id="price" placeholder="price">
                </div>
            </div>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputStatus">Image</label>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="file" name="prod" />

                </div>
            </div>
            <input type="submit" name="Add" class="btn btn-primary">
        </form>
    </div>
</body>

</html>