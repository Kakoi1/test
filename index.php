<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login And Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header class="header">
        <nav class="navbar">
           <a href="#">Home</a>
           <a href="#">About</a>
           <a href="#">Services</a>
           <a href="#">Contact</a>

        </nav>

        <form action="#" class="search-bar">
         <input type="text" placeholder="Search..."> 
         <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>
   <div class="background"></div>
    <div class="container">
      <div class="content">
        <h2 class="logo"><i class='bx bxs-notepad'></i>WondeRoland</h2>

        <div class="text-sci">
            <h2>Welcome !<br><span>To Our New Notepad App.</span></h2>

            <p>The online note app is a digital platform designed for users to create, organize, and store notes efficiently.</p>

            <div class="social-icons">
                <a href=""><i class='bx bxl-facebook' ></i></a>
                <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                <a href=""><i class='bx bxl-twitter' ></i></a>
                <a href=""><i class='bx bxl-youtube' ></i></a>
            </div>
        </div>
      </div>

      <div class="logreg-box">
        <div class="form-box login">
            <form action="#">
                <h2>Sign In</h2>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="username" required>
                    <label >Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock'></i></span>
                    <input type="password" required>
                    <label >Password</label>
                </div>

                <div class="remember-forgot">
                    <label ><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Sign In</button>

                <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Sign up</a></p>
                </div>


            </form>


        </div>

        <div class="form-box register">
            <form action="#">
                <h2>Sign Up</h2>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="text" required>
                    <label >Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-user-plus'></i></span>
                    <input type="username" required>
                    <label >Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock'></i></span>
                    <input type="password" required>
                    <label >Password</label>
                </div>

                <div class="remember-forgot">
                    <label ><input type="checkbox">I agree to terms & conditions </label>
                    
                </div>

                <button type="submit" class="btn">Sign Up</button>

                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Sign In</a></p>
                </div>

            </form>
        </div>
      </div>

    </div>
    
    
    <script src="script.js"></script>
</body>
</html>