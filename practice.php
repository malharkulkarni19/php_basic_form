<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<form action="connect.php" method="post">

  <label for="fname">User Name</label><br>
  <input type="text" id="fname" name="fname" value=""><br>

  <label for="lname">Last Name</label><br>
  <input type="text" id="lname" name="lname" value=""><br>

  <label for="email">E-mail</label><br>
  <input type="email" id="email" name="email" value=""><br>

  <label for="address">Password</label><br>
  <input type="password" id="password" name="password" value=""><br>

  <label for="phone">Phone No</label><br>
  <input type="number" id="phone" name="phone" value=""><br><br>
  
  <input type="submit" value="Submit">
  
</form>

<form action="update.php" method="post">
  <input type="submit" value="Update">
</form>



</body>
</html>