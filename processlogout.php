<?php
setcookie("username","", time()-3600,"/");//reduce time to negative
header('Location: index.php');

?>