<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
  <style>
    .loginform {
      position: absolute;
      width: 400px;
      height: 700px;
      background: linear-gradient(45deg, purple, darkblue);

      padding: 25px;
      border-radius: 12px;
      color: white;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-evenly;
    }

    .loginform img {
      height: 100px;
      width: 100px;
      margin-top: 50px;
    }

    .loginform input {
      width: 100%;
      padding: 10px;
      font-size: medium;
      border-radius: 8px;
    }

    .loginform button {
      text-align: center;
      padding: 8px;
      width: 60%;
      background: linear-gradient(45deg, red, orange);
      border-radius: 15px;
      outline: none;
      color: white;
      border: none;
    }

    .error {
      background-color: red;
      color: white;
      font-weight: 700;
      padding: 10px;
      width: 100%;
      text-align: center;
    }
  </style>
</head>

<body>
  <div style="display: flex; justify-content: center">
    <form action="../include/login.php" method="post" class="loginform">
      <img src="../video/avatar.jpg" alt="avatar" />

      <h1 style="margin-top: 10px">LOG IN</h1>

      <h3 class="error">Email/Password Invalid</h3>
      <p>Re enter your Password and email</p>

      <input type="text" name="email" id="" placeholder="E mail/Username" required />
      <input type="text" name="password" id="" placeholder="Password" required />
      <button type="submit" name="submit">Login</button>
      <p>Forgot Password?</p>
    </form>
  </div>
</body>

</html>