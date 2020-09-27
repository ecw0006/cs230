<?php
  require 'includes/header.php'

?>
<main>
 
 <link rel="stylesheet" href="css/login.css">

    <div class="bg-cover">
        <div class="container"style="padding-top 80px;">
          <div id="Slides" class="carousel slide col-md-8 offset-md-2 " data-ride="carousel" style="margin-top: 80px;" style="margin-bottom: 30px;">
            <ol class="carousel-indicators">
                <li data-target="#Slides" data-slide-to="0" class="active"></li>
                <li data-target="#Slides" data-slide-to="1"></li>
                <li data-target="#Slides" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block mx-auto" src="images/adventure1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block  mx-auto" src="images/adventure2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block  mx-auto" src="images/download.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#Slides" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#Slides" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background: white;">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="text" name="uname" id= "inputEmail" class="form-control" placeholder="Username/Email address" required
                        autofocus>
                    <label for="inputPassword" name="pwd" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <div class="checkbox mb-3" style="text-align: left;">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-secondary btn-block" name = "login-submit" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
                </form>
            </div>
        </div>

    </div>
</main>

