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
  <body id="navbar">
  <?php include("navbar.php"); ?>
        <div id="space"></div>
      <section>
      <main role="main" class="container">
  <div class="row">
    <div class="col-md-8">

      <div class="">
      <h3> Contact Us</h3>
      <hr>
      <form action="" method="post">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First name"  required autofocus>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last name"  required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">City</label>
      <input type="text" name="city" class="form-control" id="validationDefault03" placeholder="City" required>
    </div>
    <div class="col-md-12 mb-3">
    <label >Email address</label>
    <input type="email" name="email" class="form-control" placeholder="Email address" required >
    </div>
  </div>
  <!-- <div id="space"></div> -->
  <div class="form-group" style="margin-top:5px;">
    <label for="exampleFormControlTextarea1">Suggestions</label>
    <textarea class="form-control" name="suggest" id="exampleFormControlTextarea1" placeholder="Suggestions" rows="3"></textarea>
  </div>
  <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
</form>
<?php
include("dbconnect.php");
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$email=$_POST['email'];
$suggest=$_POST['suggest'];
if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
      $query="INSERT INTO userinfo (firstname,lastname,city,email,suggestions) values ('$fname','$lname','$city','$email','$suggest')";
        if(mysqli_query($conn,$query))
        {
          echo "Form Submitted";
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
<div id="space"></div>
<h3> Publish your article on our website</h3>
<hr>
<div id="space"></div>
<form action="" enctype="multipart/form-data" method="post">
  <div class="form-group">
  <div class="form-row">
      <label for="validationDefault03">Title of your Article</label>
      <input type="text" name="title" class="form-control" id="validationDefault03" placeholder="Title" required>
    </div>
    <label for="exampleFormControlFile1" style="margin-top:10px;">Upload Article</label>
    <input type="file" class="form-control-file" accept="application/pdf" name="file" id="file" id="exampleFormControlFile1">
  </div>
  <button class="btn btn-primary" name="upload" type="submit">Upload</button>
  <?php
  include("dbconnect.php");
if(isset($_POST['upload']))
{
    if(isset($_FILES['file']))
    {   
      $title = $_POST["title"];
      $allow=array('pdf');
        $temp=explode(".", $_FILES['file']['name']);
        $extension=end($temp);
        $filename=rand(1000,10000)."-".$_FILES['file']['name'];
        $fileloc=$_FILES['file']['tmp_name'];
        $sql = "INSERT into article (title,article) VALUES('$title','$filename')";
        move_uploaded_file($fileloc,"upload/".$filename);
        if(mysqli_query($conn,$sql))
        {
            echo "<br>Article Uploaded Successfully";
            $to = "$email";
          $subject = "Response From embeddedsystem.ml";
          $message = "Thank You For Uploading Your article with title $title ";
          $headers = "From: Embeddedsystem@gmail.com";
          mail($to,$subject,$message,$headers);
        }
        else {
            echo "<br> ERROR DURING UPLOAD";
        }  
    }
}
?>
  <div id="space"></div>
</form>

</div><!-- /.blog-post -->

      

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
      
      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
      <div class="mb-3 p-4" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.7527915215023!2d72.87237481498421!3d19.205996787013476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0e57647569d%3A0xc0aec329c82d3555!2sThakur%20College%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1596463523448!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="container-fluid"></iframe>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

      </section>
    <footer class="footer foot mt-auto py-3">
        <div class="container">
          <span >This is the end of a page</span>
          <a href="#navbar" class="btn btn-primary">back to top</a>
          <p>Copyright &copy2020 All Rights Reserved</p>
        </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
