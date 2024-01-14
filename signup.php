<!DOCTYPE html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="form.php">
</head>

<body>
    <form action="connect.php" method="POST">
        <div class="container">
            <h1 class="form-title">SIGN UP TO DISESYETE OAS</h1>

            <label for="Email">Your Email Address:</label>
            <input type="text" name="mail" required>

            <label for="Password">Password:</label>
            <input type="text" name="pass" required> 

            <button type="submit">Sign Up</button>

            <a href="loginwith.html" class="ca">Sign up using your socials?</a>
     </form>
 <div>
    <div class="btn-container">
    <form action="googlein.php" method="POST">
    <button class="loginBtn loginBtn--facebook">
        Login with Facebook
      </button>
    </form>
    <form action="googlein.php" method="POST">
      <button class="loginBtn loginBtn--google">
        Login with Google
      </button>
    </form>
    </div>  
</div>
</body>
</div>
</html>

<body>
  <style>
    
    body {
      font-family: Arial, sans-serif;
      background-color: yellowgreen;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #441099;
      color: #ffffff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      height: 40px;
    }

    button:hover {
      background-color: #441099;
    }

    .container {
      color: rgb(219, 69, 94);
    }

    h1 {
      position: center;
      font: inherit;
      height: 20px;
    }

/* sign up to socials buttons */

  .btn-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  height: 150px;
  margin-top: 5vh;

  }

  .loginBtn {
    box-sizing: border-box;
    position: relative;
    align-items: center;
    margin: 0.2em;
    padding: 0 50px 0 46px;
    border: none;
    text-align: none;
    line-height: 34px;
    white-space: nowrap;
    border-radius: 0.2em;
    font-size: 16px;
    color: #f2f2f2;
    width: 30vh;
    margin-top: 0px;
    margin-left: 90px;
    cursor: pointer;
  }
  .loginBtn:before {
    content: "";
    box-sizing: border-box;
    position: absolute;
    top: 0;
    left: 0;
    width: 34px;
    height: 100%;
  }
  .loginBtn:focus {
    outline: none;
  }
  .loginBtn:active {
    box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
  }

  .loginBtn--facebook {
    background-color: #4C69BA;
    background-image: linear-gradient(#4C69BA, #3B55A0);
    text-shadow: 0 -1px 0 #354C8C;
  }
  .loginBtn--facebook:before {
    border-right: #364e92 1px solid;
    background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
  }
  .loginBtn--facebook:hover,
  .loginBtn--facebook:focus {
    background-color: #5B7BD5;
    background-image: linear-gradient(#5B7BD5, #4864B1);
  }

  .loginBtn--google {
    background: #e03e1e;
  }
  .loginBtn--google:before {
    border-right: #574442 1px solid;
    background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
  }
  .loginBtn--google:hover,
  .loginBtn--google:focus {
    background: #E74B37;
  }
    </style>
  </body>