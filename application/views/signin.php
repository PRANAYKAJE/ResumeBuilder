<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url("Assets/css/style.css"); ?>">
    <title>Sign IN Page</title>
</head>
<body>
  <div class="container">
        
    <div class="navbar">

        <!-- Navigation Links -->
        <div class="nav-links">
            <a href="index.html">Back to Page</a>
        </div>

    </div>

        
        <div class="sign_box">
            <div class="signin">
                <div class="login_form">
                    <form action="#">
                      <h3>Sign In</h3>
                      <div class="login_option">
                        <div class="option">
                          <a href="#">
                            <img src="<?= base_url('Assets/images/google.png');?>" alt="Google" />
                            <span>Google</span>
                          </a>
                        </div>
                        <div class="option">
                          <a href="#">
                            <img src="<?= base_url('Assets/images/apple.png');?>" alt="Apple" />
                            <span>Apple</span>
                          </a>
                        </div>
                      </div>
                      <p class="separator">
                        <span>or</span>
                      </p>
                      <div class="input_box">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Enter email address" required />
                      </div>
                      <div class="input_box">
                        <div class="password_title">
                          <label for="password">Password</label>
                          <a href="#">Forgot Password?</a>
                        </div>
                        <input type="password" id="password" placeholder="Enter your password" required />
                      </div>
                      <button type="submit">Log In</button>
                      <p class="sign_up">Don't have an account? <a href="signup">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>