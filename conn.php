<?php
$connetion =mysqli_connect("localhost","root","password","project");
if($connetion){
    echo "connection established      ";
}
else{
    echo "error/: ".mysqli_error($connetion);
}

?>
