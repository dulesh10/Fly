
<!doctype html>
<html lang="en">
<head>
<!--1 Required meta tags -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/ css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGS03+Hhxv8T/ Q5PaXtkktuбugSTOeNV6gBiFeWPGFN9Muhof 23091fjh" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <h2 class="logo">Fly Electronic</h2>
        <nav class="navigation">
        <a href="home.php">HOME</a>
        <a href="about.php.">ABOUT</a>
        <a href="service.php">SERVICE</a>
        <a href="#">CONTACT</a>
        <button class="btnLogin-popup">Login</button>
     </nav>
</header>
 <div class="wrapper">
    <span class="icon-class">
       <ion-icon name="close"></ion-icon>
     </span>
    <div class="form-box login">
        <h2>Login</h2> 
        <form action="connectivity.php" method="post">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="varchar" name="email" required>
                <label >Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="text" name="pass" required>
                <label >Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">
                Remember me </label>
                <a href="#">Forgot Password?</a>
            </div>
            <button type="submit" name="submit" class="btn">Login</button>
            <div class="login-register">
                <p>Don't have an account? 
                <a href="#" class="register-link">Register</a></p>
            </div>
            </form> 
    </div>
</div>
            
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-36qa4849b1E2+poT4WnyKhv5vZF5SrPoiEjwBvKU71mGFAV@wwj1yYfORSJoZ +n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlv1910Yy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.72 21 js" integrity="sha384-wfSDF2E50Y2D1uUdj003uMBJnjuUD4Ih7YwaYdliqfktjeUod8GCEx130g81fwB6" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
