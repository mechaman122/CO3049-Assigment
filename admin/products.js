function setUpdateAction() {
    document.frmUser.action = "edit_product.php";
    document.frmUser.submit();
}
function setDeleteAction() {
    if(confirm("Are you sure want to delete these rows?")) {
        document.frmUser.action = "delete_product.php";
        document.frmUser.submit();
    }
}
function setAddAction() {
    document.frmUser.action = "add_product.php";
    document.frmUser.submit();
}

function setDeleteUAction() {
    if(confirm("Are you sure want to delete these users?")) {
        document.frmUser.action = "delete_user.php";
        document.frmUser.submit();
    }
}