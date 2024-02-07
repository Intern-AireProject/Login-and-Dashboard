<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in/up Form</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="../css/styles.css">
	
</head>
<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="#">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="#" class="social facebook"></a>
          <a href="https://www.instagram.com/dhika.fhrz/" class="social instagram"></a>
          <a href="#" class="social linkedin"></a>
        </div>
        <span>or use your email for registration</span>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="<?=('Login/processLogin')?>" method="post">
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social facebook"></a>
          <a href="https://www.instagram.com/dhika.fhrz/" class="social instagram"></a>
          <a href="#" class="social linkedin"></a>
        </div>
        <span>or use your account</span>
        <input type="email" id="email" name="email" placeholder="Email">
        <input type="password" id="password" name="password" placeholder="Password">
        <a href="#">Forgot your password?</a>
        <button type="submit">Sign In</button>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <div class="mainlogo-container">
            <img src="../logo/aire-logo.png" alt="">
          </div>
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
          <div class="circle">
            <img src="../logo/mattar-spinner.png" width="75px" height="75px" alt="">
          </div>
        </div>
        <div class="overlay-panel overlay-right">
          <div class="mainlogo-container">
            <img src="../logo/aire-logo.png" alt="">
          </div>
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start your journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
          <div class="circle">
            <img src="../logo/adib-spinner.png" width="75px" height="75px" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
	<script src= "../js/script.js"></script>
	<footer>
    <p>
      Intern - AireProject <i class="fa fa-heart"></i> by
      <a target="_blank" href="https://instagram.com/mbkm.optima">Meta Media Optima Corp</a>
      <!-- - Read how I created this and how you can join the challenge
      <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>. -->
    </p>
  </footer>
</body>
</html>
