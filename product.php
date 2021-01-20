<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

    
</head>
<body>
    
    <form action="add_product.php">
        <h4>name</h4>
        <input type="text" name="name">
        <h4>price</h4>
        <input type="text" name="price">
        <h4>รูป</h4>
        <input type="text" name="img">
        <h4>detail</h4>
        <textarea name="detail" style="margin: 0px; width:260px; height:200px;"></textarea>
        <h4>Size</h4>
        <input type="text" name="size">
        <h4>Scale</h4>
        <input type="text" name="scale">
        <h4>pledge</h4>
        <input type="text" name="pledge">
        <button type="submit">save</button>   
    </form>
    <br><br><hr>

<?php 
require("server.php");

$sql = "SELECT id_product, img FROM product";
$sql = $sql . " WHERE id_product;";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<form action="add_img.php">';
    echo '<h4>เลือก product</h4>';  
    echo '<select name="id">';          
    while($row = mysqli_fetch_assoc($result)){ 


        echo '<option>'.$row['id_product'].'</option>';


   
        }
    echo '</select>';
?>
<br>
<h4>รูป</h4>
<input type="text" name="img2">
<button type="submit">เพิ่ม</button>
<?php
    echo '</form>';
        
        
    } else {
        
    }
    
    mysqli_close($conn);
?>
</body>
</html>