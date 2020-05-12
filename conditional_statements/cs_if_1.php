<?php
$a = $_POST['value'];
if($a =="ajay" || $a == "abi"){
    echo "The value is $a";
}
?>
<form method="post" action="">
<input type="text" name="value">
<input type="submit">
</form>