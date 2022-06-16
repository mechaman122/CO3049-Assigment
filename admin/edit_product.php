<?php
require_once "db.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$productsCount = count($_POST["item_name"]);
for($i=0;$i<$productsCount;$i++) {
mysqli_query($conn, "UPDATE tbl_product set item_name='" . $_POST["item_name"][$i] . "', item_price='" . $_POST["item_price"][$i] . "', item_cate='" . $_POST["item_cate"][$i] . "', item_nsx='" . $_POST["item_nsx"][$i] . "', item_about='" . $_POST["item_about"][$i] . "', item_qty='" . $_POST["item_qty"][$i] . "' WHERE item_id='" . $_POST["item_id"][$i] . "'" );
}
header("Location:product-manager.php?search=.*");
}
?>
<html>
<head>
<title>Edit Product</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form class="form-control" name="frmUser" method="post" action="">
<div style="width:500px;">
<table class="table" border="0" cellpadding="10" cellspacing="0" align="center">
<tr class="tableheader">
<td style="background-color: yellow;">Edit Product</td>
</tr>
<?php
$rowCount = count($_POST["items"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($conn, "SELECT * FROM tbl_product WHERE item_id='" . $_POST["items"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" align="center" class="tblSaveForm table">
<tr>
<td><label>Name</label></td>
<td><input type="hidden" name="item_id[]" class="txtField" value="<?php echo $row[$i]['item_id']; ?>"><input type="text" name="item_name[]" class="txtField" value="<?php echo $row[$i]['item_name']; ?>"></td>
</tr>
<tr>
<td><label>Price</label></td>
<td><input type="number" name="item_price[]" class="txtField" value="<?php echo $row[$i]['item_price']; ?>"></td>
</tr>
<tr>
<td><label>Category</label></td>
<td><input type="text" name="item_cate[]" class="txtField" value="<?php echo $row[$i]['item_cate']; ?>"></td>
</tr>
<tr>
<td><label>Pro Year</label></td>
<td><input type="text" name="item_nsx[]" class="txtField" value="<?php echo $row[$i]['item_nsx']; ?>"></td>
</tr>
<tr>
<td><label>About</label></td>
<td><textarea name="item_about[]" rows="4" cols="50" class="txtField"><?php echo $row[$i]['item_about']; ?></textarea>
</tr>
<tr>
<td><label>Qty</label></td>
<td><input type="text" name="item_about[]" class="txtField" value="<?php echo $row[$i]['item_qty']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>