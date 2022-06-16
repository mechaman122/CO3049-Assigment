<?php
require_once "db.php";
$rowCount = count($_POST["items"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($conn, "DELETE FROM tbl_product WHERE item_id='" . $_POST["items"][$i] . "'");
}
header("Location:product-manager.php?search=.*");
?>