




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1;}
  
  input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
  }
  
  button {
      background-color: #2ba1e8;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
  }
  
  button:hover {
      opacity: 0.8;
  }
  
  .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
  }
  
.container {
      padding: 89px;
    
  }
  
  span.psw {
      float: right;
      padding-top: 16px;
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
  }
  </style>
</head>
<body>

<center><h2>Admin Login</h2></center>

<form action="login.php" method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name='reg_button'>Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <!--<div class="container" style="background-color:#f1f1f1">
    <button type="back" class="cancelbtn ">back</button>
  </div>--><br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
  <br></br>
</form>

</body>
</html>
<?php

global $user,$pass;
$user=$_POST['uname'];
$pass=$_POST['psw'];
if($user=="admin"&&$pass=="admin")
{
    if(isset($_POST['reg_button'])){
        header("Location: LOGINNEXT.html");
        exit;
        }
    echo"super login";
}
else
{   
    if(isset($_POST['reg_button'])){
        header("Location: funny.html");
        exit;
        }
    echo"super login";
}
?>

