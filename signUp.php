<?php
    include('signUp2.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Assignment02/Anime Fandom</title>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
      
    <!-- Custom style with Bootstrap core css imported -->
    <link href="css/mystyle.css" rel="stylesheet">
      
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="signUp.php">Sign Up</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="popularShows.html">Popular Shows</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="signUp.php">Sign Up</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>



    <!-- Sign up Form
    ================================================== -->
    <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <form name="contactForm" method="post" action="contact.php">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php if(isset($_POST['name'])){echo htmlspecialchars($_POST['name']);} ?>"><?php if(isset($errName)){echo "<p class='text-danger'>$errName</p>";} ?>
                            </div>
                            <div class="form-group">
                                <label for="company">Company Name:</label>
                                <input type="text" name="company" class="form-control" id="company" placeholder="Enter company name" value="<?php if(isset($_POST['company'])){echo htmlspecialchars($_POST['company']);} ?>"><?php if(isset($errCompany)){echo "<p class='text-danger'>$errCompany</p>";} ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>"><?php if(isset($errEmail)){echo "<p class='text-danger'>$errEmail</p>";} ?>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" class="form-control" id="message"><?php if(isset($_POST['message'])){echo htmlspecialchars($_POST['message']);} ?></textarea><?php if(isset($errMessage)){echo "<p class='text-danger'>$errMessage</p>";} ?>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
      </section>


   


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <script>
     
      
     
      </script>
  </body>
</html>
