<?php
include("config.php");

$message = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO goods (id,name, description, price, quantity)
            VALUES ('$id','$name', '$description', '$price', '$quantity')";

    if(mysqli_query($conn, $sql)){
        $message = "Good inserted successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
if($message != "") echo "<p>$message</p>"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Goods</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Insert New Good</h2>
    <form method="POST" action="">
        ID: <input type="number" name ="id"require><br><br>
        Name: <input type="text" name="name" required><br><br>
        Description: <textarea name="description"></textarea><br><br>
        Price: <input type="number" step="0.01" name="price" required><br><br>
        Quantity: <input type="number" name="quantity" required><br><br>
        <input type="submit" name="submit" value="Insert Good">
    </form>
    <p><a href="show_goods.php">View All Goods</a></p>
</body>
</html>
