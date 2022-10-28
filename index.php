<?php 
session_start();
if(isset($_POST['submit'])){
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *,
*::after,
*::before {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  direction: rtl;
}
html {
  font-size: 62.5%;
}
body {
  font-size: 1.6rem;
}
form {
  background: url("../image/xelan2.png");
  width: 90%;
  flex-direction: column;
  display: flex;
  background-position: center;
  background-size: cover;
  box-sizing: border-box;
  justify-content: center;
  align-items: center;
  height: 70vh;
  margin: 12rem auto;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
label,
input {
  margin-bottom: 2rem;
  font-size: 1.8rem;
  padding: 0.2rem;
  outline: none;
  border: none;
  font-weight: 900;
}
input {
  border-bottom: 2px solid blue;
  background: inherit;
}
input[type="submit"] {
  font-size: 1.8rem;
  padding: 0.8rem 1.4rem;
  margin-top: 2rem;
  border: none;
  color: white;
  background: black;
}
input[type="submit"]:hover {
  color: crimson;
  background: rgb(255, 242, 0);
}
@media screen and (max-width: 540px) {
  form {
    background-image: url("../image/xelan2.png");
    background-position-y: bottom;
    background-size: cover;
    background-repeat: no-repeat;
    background-position-x: right;
  }
}
    </style>
</head>
<body>
    <form method="post">
        <div>
        <label for="name">ناو:</label>
        <input type="text" name="name">
        </div>
        <div>
            <label for="password">پاسۆرد:</label>
            <input type="password" name="password">
    <?php 

    if(isset($_POST['submit'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        
         if($_SESSION['name'] !== 'khelan_mhamad' && $_SESSION['password'] !== '10-11-2001kh'){
        echo '<br><label>ناو و پاسۆرد هەلەیە</label>';
        }
       else if($_SESSION['name'] !== 'khelan_mhamad'){
            echo ' <br> ناوی داخڵکراو هەلەیە';
        }
        else if($_SESSION['password'] !== '10-11-2001kh'){
            echo ' <br> پاسۆردی داخڵکراو هەلەیە';
        }

    }

        ?>
        </div>
        <input type="submit" value="داخڵبوون" name="submit">
    </form>
<?php
        if($_SESSION['name'] == 'khelan_mhamad' && $_SESSION['password'] == '10-11-2001kh'){
            header("location:page2.php");
            }
?>
</body>
</html>