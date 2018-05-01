<?php
include "connection.php"
    /*Agency login*/
$aname = $_POST["aname"];
$apsw = $_POST["apsw"];

$sql ="INSERT INTO alogin(aname,apsw) VALUES('$aname','$apsw')";
?>
<?php
include "connection.php"
    /*Agency sign up*/
$aemail = $_POST["aemail"];
$aspsw = $_POST["aspsw"];
$apswr = $_POST["apswr"];
$sql ="INSERT INTO asign(aemail,aspsw,apswr) VALUES('$aemail','$aspsw','$apswr')";
?>
