<?php
include("config.php");

// Reba niba ID yatanzwe
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query yo gusiba
    $sql = "DELETE FROM goods WHERE id = $id";

    if(mysqli_query($conn, $sql)){
        echo "Good deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// Subira kuri page yerekana goods
header("Location: show_goods.php");
exit;
?>
