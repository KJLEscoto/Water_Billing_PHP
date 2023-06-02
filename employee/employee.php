<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee | Log in</title>
  <link rel="stylesheet" href="../dist/output.css">
  <link rel="shortcut icon" type="x-icon" href="../images/logo.jpg">
</head>

<body class="container w-full h-auto bg-[#0A3442] relative">
  <div class="absolute top-[200px] left-[350px] flex">
    <img class="w-[400px] rounded-l-2xl" src="../images/logo.jpg" alt="logo">
    <div class="w-[400px] h-auto bg-[#D9D9D9] rounded-r-2xl ">
      <div class="text-center justify-center">
        <h4 class="text-[#0A6580] font-bold text-3xl mt-10">EMPLOYEE</h4>
        <p class="text-xl font-medium mt-3 text-[#0A6580]">Please enter your credentials.</p>
        <form action="index.php" class="mt-5 justify-center">
          <div class="flex justify-center mt-7">
            <input class="py-3 px-5" type="text" placeholder="Username" name="username">
            <img class="w-12 h-auto" src="../images/user_icon.png" alt="user_icon">
          </div>
          <div class="flex justify-center mt-5">
            <input class="py-3 px-5" type="password" placeholder="Password" name="password">
            <img class="w-12 h-auto" src="../images/Pass.png" alt="Pass">
          </div>
        </form>
        <div class="flex mt-10 px-12">
          <form class="text-center justify-center font-medium m-auto" action="../index.php" method="post">
            <input
              class="py-4 px-10 bg-[#91AEB2] text-[#D9D9D9] rounded-xl hover:bg-[#1FB5C6] transition-all ease-in 2s hover:text-[#0A3442] tracking-wider hover:cursor-pointer"
              type="submit" name="back" value="Back">
          </form>
          <form class="text-center justify-center font-medium m-auto" action="employee/employee.php">
            <input
              class="py-4 px-9 bg-[#0A3442] text-[#D9D9D9] rounded-xl hover:bg-[#1FB5C6] transition-all ease-in 2s hover:text-[#0A3442] tracking-wider hover:cursor-pointer"
              type="submit" name="login" value="Login">
          </form>
        </div>
      </div>


    </div>
  </div>
</body>

</html>

<?php
  
?>