<?php
include "connection.php"
    /*Client login*/
$cname = $_POST["cname"];
$cpsw = $_POST["cpsw"];

$sql ="INSERT INTO clogin(cname,cpsw) VALUES('$cname','$cpsw')";
?>
<?php
<?php
include "connection.php"
    /*Client Sign up*/
$cemail = $_POST["cemail"];
$cspsw = $_POST["cspsw"];
$cspswr = $_POST["cspswr"];
$sql ="INSERT INTO csign(cemail,cspsw,cspswr) VALUES('$cemail','$cspsw','$cspswr')";
?>
<?php