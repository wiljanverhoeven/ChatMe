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
    <section class="edit">
      <header>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="content">
            <img src="img.jpg" alt="">
            <input type="file">
        </div>
      </header>
      <form action="#">
        <div class="field input">
          <label>Username...</label>
          <input type="text" placeholder="new username...">
        </div>
        <div class="field input">
          <label>voorbeeld@mail.com</label>
          <input type="text" placeholder="new e-mail...">
        </div>
        <div class="field input">
          <label>New password</label>
          <input type="text" placeholder="new password...">
        </div>
        <div class="field input">
          <input type="submit" value="Save changes">
        </div>
      </form>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>