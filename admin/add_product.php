<?php
require_once "db.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
mysqli_query($conn, "INSERT INTO tbl_product (item_name, item_price, item_cate, item_nsx) VALUES ('" . $_POST["item_name"][$i] . "', '" . $_POST["item_price"][$i] . "', '" . $_POST["item_cate"][$i] . "', '" . $_POST["item_nsx"][$i] . "')");
header("Location:product-manager.php?search=.*");
}
?>
<html>
<head>
<title>Add Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form class="form-control" name="frmUser" method="post" action="">
<div style="width:500px;">
<table class="table" border="0" cellpadding="10" cellspacing="0" align="center">
<tr class="tableheader">
<td style="background-color: yellow;">Add Product</td>
</tr>

<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" align="center" class="tblSaveForm table">
<tr>
<td><label>Name</label></td>
<td><input type="hidden" name="item_id[]" class="txtField" value=""><input type="text" name="item_name[]" class="txtField" value=""></td>
</tr>
<tr>
<td><label>Price</label></td>
<td><input type="number" name="item_price[]" class="txtField" value=""></td>
</tr>
<td><label>Category</label></td>
<td><input type="text" name="item_cate[]" class="txtField" value=""></td>
</tr>
<td><label>Pro Year</label></td>
<td><input type="text" name="item_nsx[]" class="txtField" value=""></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Add" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>