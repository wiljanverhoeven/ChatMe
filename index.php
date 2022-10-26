<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
  <div class="wrapper">
  <div class="logo"><img src="logo.png" alt=""></div>
    <section class="form signup">
      <header>Make new ChatMe account</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Username</label>
            <input type="text" name="uname" placeholder="Username..." required>
          </div>
        <div class="field input">
          <label>Email</label>
          <input type="text" name="email" placeholder="E-mail..." required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Password..." required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Kies profiel foto</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Naar chatten">
        </div>
      </form>
      <div class="link">Al een account? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
