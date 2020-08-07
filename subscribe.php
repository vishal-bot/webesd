
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <title>Embeded</title>
  </head>
  <body >
  <?php include("navbar.php"); ?>
  <div id="space"></div>
  <div id="space"></div>
      <section class="text-center">
  <form class="form-signin" action="" method="POST">
  <h1 class="h3 mb-3 font-weight-normal">Please Subscribe for updates</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  </div>
  <div id="space"></div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Subscribe</button>
  <?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$email=$_POST['email'];
if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $query="INSERT INTO email (email) values ('$email')";
        if(mysqli_query($conn,$query))
        {
          echo "Subscribed";
          $to = "$email";
          $subject = "Response From embeddedsystem.ml";
          $message = "localhost Thank You For Regsitration 
          Now You will get update whenever we add new articles in our website";
          $headers = "From: Embeddedsystem@gmail.com";
          mail($to,$subject,$message,$headers);
        }
        else {
            echo "an Error Occured";
        }
    }
    else {
        echo "Invalid Email";
    }
    
}
?>
 </section>
 <div id="space"></div>
 <div id="space"></div>
      <footer class="footer mt-auto py-3"  width: 100%;">
        <div class="container">
          <span >This is the end of a page</span>
          <p> Copyright &copy2020 All Rights Reserved</p>
        </div>
      </footer>
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>

