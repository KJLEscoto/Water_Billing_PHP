<?php
  // include("index.php");

  // if(isset($_GET["admin"])) {
  //   include("./admin/admin.html");
  // }
  // elseif(isset($_GET["employee"])){
  //   include("./employee/employee.html");
  // }

  $flag = true;
  switch($flag){
    case $flag:
      include("index.php");
      break;
    case isset($_GET["admin"]):
      include("./admin/admin.html");
      break;
    case (isset($_GET["employee"])):
      include("./employee/employee.html");
      break;
    default:
      echo "run again!";
    }

?>