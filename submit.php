<?php
// connect to db
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
if($pass==$cpass){
$id = $_POST['id'];
$name = $_POST['name'];
$mob = $_POST['num'];
$addr = $_POST['addr'];
$uname = $_POST['uname'];
$gen = $_POST['gender'];

$results = $conn->query("insert into user123 (u_id, u_name, u_ph, u_addr, u_uname, u_pass, u_gen) values('$id', '$name', '$mob', '$addr', '$uname', '$pass', '$gen')");

}
?>