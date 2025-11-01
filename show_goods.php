<?php
include("config.php");

$sql = "SELECT * FROM goods ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Goods</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Goods List</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Quantity</th><th>Created At</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['description']."</td>
                    <td>".$row['price']."</td>
                    <td>".$row['quantity']."</td>
                    <td>".$row['creat_at']."</td>
                    <td><a href='delet_goods.php?id=".$row['id']."' onclick='return confirm(\"Are you sure?\");'>Delete</a></td>
                  </tr>";
        }
        ?>
    </table>
    <p><a href="insert_goods.php">Insert New Good</a></p>
</body>
</html>
