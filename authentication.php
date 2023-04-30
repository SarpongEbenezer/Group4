<?php
session_start(); // start session to store user data

include 'config.php'; // include the database configuration file

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // check if form has been submitted
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) { // check if user exists
    $user = $result->fetch_assoc();
    $_SESSION['user'] = $user; // store user data in session
    header('Location: index.php'); // redirect to dashboard page
    exit;
  } else {
    $error = 'Invalid username or password'; // set error message
  }
}
?>
<?php

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the user input from the form
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];

  // Prepare and bind the SQL statement
  $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $username, $email, $password);

  // Execute the statement and check if it was successful
  if ($stmt->execute()) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the statement and database connection
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
</head>

<body>

  






<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
    <link rel="stylesheet" href="style.css" />
    <!-- Fontawesome CDN Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <style>
    /* Google Font Link */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      /* background: #7d2ae8; */
      padding: 30px;

      width: 100%;
	height: 100vh;
	background-image:url('./wallpaper.jpg');
    background-size: cover;
    background-position: center;
    }
    .container {
      position: relative;
      max-width: 850px;
      width: 100%;
      background: #fff;
      padding: 40px 30px;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
      perspective: 2700px;
    }
    .container .cover {
      position: absolute;
      top: 0;
      left: 50%;
      height: 100%;
      width: 50%;
      z-index: 98;
      transition: all 1s ease;
      transform-origin: left;
      transform-style: preserve-3d;
    }
    .container #flip:checked ~ .cover {
      transform: rotateY(-180deg);
    }
    .container .cover .front,
    .container .cover .back {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
    }
    .cover .back {
      transform: rotateY(180deg);
      backface-visibility: hidden;
    }
    .container .cover::before,
    .container .cover::after {
      content: "";
      position: absolute;
      height: 100%;
      width: 100%;
      background: #7d2ae8;
      opacity: 0.9;
      z-index: 12;
    }
    .container .cover::after {
      opacity: 0.3;
      transform: rotateY(180deg);
      backface-visibility: hidden;
    }
    .container .cover img {
      position: absolute;
      height: 100%;
      width: 100%;
      object-fit: cover;
      z-index: 10;
    }
    .container .cover .text {
      position: absolute;
      z-index: 130;
      height: 100%;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .cover .text .text-1,
    .cover .text .text-2 {
      font-size: 26px;
      font-weight: 600;
      color: #fff;
      text-align: center;
    }
    .cover .text .text-2 {
      font-size: 15px;
      font-weight: 500;
      color: black;
    }
    .container .forms {
      height: 100%;
      width: 100%;
      background: #fff;
    }
    .container .form-content {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .form-content .login-form,
    .form-content .signup-form {
      width: calc(100% / 2 - 25px);
    }
    .forms .form-content .title {
      position: relative;
      font-size: 24px;
      font-weight: 500;
      color: #333;
    }
    .forms .form-content .title:before {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 25px;
      background: #7d2ae8;
    }
    .forms .signup-form .title:before {
      width: 20px;
    }
    .forms .form-content .input-boxes {
      margin-top: 30px;
    }
    .forms .form-content .input-box {
      display: flex;
      align-items: center;
      height: 50px;
      width: 100%;
      margin: 10px 0;
      position: relative;
    }
    .form-content .input-box input {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      padding: 0 30px;
      font-size: 16px;
      font-weight: 500;
      border-bottom: 2px solid rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }
    .form-content .input-box input:focus,
    .form-content .input-box input:valid {
      border-color: #7d2ae8;
    }
    .form-content .input-box i {
      position: absolute;
      color: #7d2ae8;
      font-size: 17px;
    }
    .forms .form-content .text {
      font-size: 14px;
      font-weight: 500;
      color: #333;
    }
    .forms .form-content .text a {
      text-decoration: none;
    }
    .forms .form-content .text a:hover {
      text-decoration: underline;
    }
    .forms .form-content .button {
      color: #fff;
      margin-top: 40px;
    }
    .forms .form-content .button input {
      color: #fff;
      background: #7d2ae8;
      border-radius: 6px;
      padding: 0;
      cursor: pointer;
      transition: all 0.4s ease;
    }
    .forms .form-content .button input:hover {
      background: #5b13b9;
    }
    .forms .form-content label {
      color: #5b13b9;
      cursor: pointer;
    }
    .forms .form-content label:hover {
      text-decoration: underline;
    }
    .forms .form-content .login-text,
    .forms .form-content .sign-up-text {
      text-align: center;
      margin-top: 25px;
    }
    .container #flip {
      display: none;
    }
    @media (max-width: 730px) {
      .container .cover {
        display: none;
      }
      .form-content .login-form,
      .form-content .signup-form {
        width: 100%;
      }
      .form-content .signup-form {
        display: none;
      }
      .container #flip:checked ~ .forms .signup-form {
        display: block;
      }
      .container #flip:checked ~ .forms .login-form {
        display: none;
      }
    }
.hub{
  font-size: 3rem;
  color: yellow;
}
  </style>
  <body>
      <?php if (isset($error)): ?>
  <p>
    <?php echo $error; ?>
  </p>
  <?php endif; ?>
    <div class="container">
      <input type="checkbox" id="flip" />
      <div class="cover">
        <div class="front">
          <!--<img src="images/frontImg.jpg" alt="">-->
          <div class="text">
            <h1 class="hub">Ticket Hub</h1>
            <span class="text-1"
              ><P> Are you in need of a ticket reservation..? <br> worry no more, get your ticket reserved at  the comfort of your zone with no stress involved..</P></span
            >
            <span class="text-2">Let's get connected</span>
          </div>
        </div>
        <div class="back">
          <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
          <div class="text">
            <span class="text-1"
              >Complete miles of journey <br />
              with one step</span
            >
            <span class="text-2">Let's get started</span>
          </div>
        </div>
      </div>
      <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
            <form action="#" id="loginForm">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input
                    type="text"
                    placeholder="Enter your username"
                    id="login_username"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    placeholder="Enter your password"
                    id="login_password"
                    required
                  />
                </div>
                <div class="text"><a href="#">Forgot password?</a></div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit" />
                </div>
                <div class="text sign-up-text">
                  Don't have an account? <label for="flip">Sigup now</label>
                </div>
              </div>
            </form>
          </div>
          <div class="signup-form">
            <div class="title">Signup</div>
            <form action="#" id="register_form">
              <div class="input-boxes">
                <div class="input-box">
                  <i class="fas fa-user"></i>
                  <input
                    type="text"
                    placeholder="Enter your username"
                    id="username"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-envelope"></i>
                  <input
                    type="text"
                    placeholder="Enter your email"
                    id="email"
                    required
                  />
                </div>
                <div class="input-box">
                  <i class="fas fa-lock"></i>
                  <input
                    type="password"
                    placeholder="Enter your password"
                    id="password"
                    required
                  />
                </div>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input
                  type="password"
                  placeholder="Confirm password"
                  id="password"
                  required
                />
              </div>
                <div class="button input-box">
                  <input type="submit" value="Sumbit" />
                </div>
                <div class="text sign-up-text">
                  Already have an account? <label for="flip">Login now</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script>
      const reg_form = document.getElementById("register_form");
      reg_form.addEventListener("submit", (e) => {
        e.preventDefault();
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        const userData = {
          username: username,
          email: email,
          password: password,
        };
        localStorage.setItem("userData", JSON.stringify(userData));

        alert(`${username}, your account is created. Log in to start buying`)
        window.location.reload()
      });

      const loginForm = document.getElementById("loginForm");
      loginForm.addEventListener("submit", (e) => {
        e.preventDefault();
        const password = document.getElementById("login_password").value;
        const username = document.getElementById("login_username").value;
        const storedUserData = JSON.parse(localStorage.getItem("userData"));
        const storedUsername = storedUserData.username;
        const storedPassword = storedUserData.password;

        if (storedUsername === username && storedPassword === password) {
            window.location.href=`index.html?username=${username}`;
            return false
        }else{
            alert("Invalid username or password.");
            return false
        }

      });
    </script>
  </body>
</html>
