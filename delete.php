<?php 

    include("conn.php");
    $sql = "DELETE FROM student WHERE id='" . $_GET["Del"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>