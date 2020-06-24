<?php
include 'header.php';
//mysql_select_db("shikin", $conn);
//search code
//error_reporting(0);
if($_REQUEST['search']){
$name = $_POST['search'];

if(empty($name)){
    $make = '<h4>You must type a word to search!</h4>';
}else{
    $make = '<h4>No match found!</h4>';
    $sele = "SELECT * FROM users WHERE name LIKE '%$name%'";
    $result = mysqli_query($con,$sele);
    
    if($row = mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
        echo '<h4> Id                       : '.$row['id'];
        echo '<br> name                     : '.$row['name'];
        echo '<br> name                     : '.$row['C_name'];
        echo '</h4>';
    }
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);

}
}

?>