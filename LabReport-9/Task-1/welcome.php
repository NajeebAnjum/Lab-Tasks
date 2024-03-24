<?php
   
   if($_SERVER['REQUEST_METHOD'] == "POST")
   {
    if(isset($_POST['username']))
{
    $result = $_POST['username'];
    echo "<h1> Hello, $result</h1>";
}
else{
    echo "Guest";
}
}


?>