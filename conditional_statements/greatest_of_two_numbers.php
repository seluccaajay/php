<?php
$a = $_POST['value1'];
$b = $_POST['value2'];
if($a>$b){
    echo "A is greater than B";
}
else{
    echo "B is greater than A";
}
?>
<form method="post" action="">
<input type="text" name="value1">
<input type="text" name="value2">
<input type="submit">
</form>