<?php
require_once "db.php";
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysqli_query($connn, "DELETE FROM tbl_member WHERE id='" . $_POST["users"][$i] . "'");
}
header("Location:user-manager.php?search=.*");
?>