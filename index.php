<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Continue As...</title>
  <link rel="stylesheet" href="./dist/output.css">
  <link rel="shortcut icon" type="x-icon" href="./images/logo.jpg">
</head>

<body class="container w-full h-auto bg-[#0A3442] relative">
  <div class="absolute top-[200px] left-[350px] flex">
    <img class="w-[400px] rounded-l-2xl" src="./images/logo.jpg" alt="logo">
    <div class="w-[400px] h-auto bg-[#D9D9D9] rounded-r-2xl py-28">
      <form action="admin/admin.php" method="get" class="text-center justify-center font-bold">
        <input
          class="py-4 px-12 bg-[#0A3442] text-[#D9D9D9] rounded-xl hover:bg-[#1FB5C6] transition-all ease-in 2s hover:text-[#0A3442] tracking-wider hover:cursor-pointer"
          type="submit" name="admin" value="ADMIN">
        <br>
      </form>
      <form class="text-center justify-center font-bold" action="employee/employee.php">
        <input
          class="mt-10 py-4 px-9 bg-[#0A3442] text-[#D9D9D9] rounded-xl hover:bg-[#1FB5C6] transition-all ease-in 2s hover:text-[#0A3442] tracking-wider hover:cursor-pointer"
          type="submit" name="employee" value="EMPLOYEE">
      </form>
    </div>
  </div>

</body>

</html>

<?php


?>