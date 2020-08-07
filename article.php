
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Blog Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body id="navbar">
  <?php include("navbar.php"); ?> 

  <div class="jumbotron text-center text-white rounded bg-dark">
    <div >
      <h1 class="display-4 font-italic">All About Embedded System</h1>
      <p class="lead my-3">So this article is all about embedded system which help newcomers to learn basics of Embedded System.</p>
    </div>
  </div>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title">System</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>A system is an arrangement in which all its unit assemble work together according to a set of rules. It can also be defined as a way of working, organizing or doing one or many tasks according to a fixed plan. For example, a watch is a time displaying system. Its components follow a set of rules to show time. If one of its parts fails, the watch will stop working. So we can say, in a system, all its subcomponents depend on each other.</p>
        <hr>
        <h2>Embedded System</h2>
        <p>As its name suggests, Embedded means something that is attached to another thing. An embedded system can be thought of as a computer hardware system having software embedded in it. An embedded system can be an independent system or it can be a part of a large system. An embedded system is a microcontroller or microprocessor based system which is designed to perform a specific task. For example, a fire alarm is an embedded system; it will sense only smoke.</p>
        <p>An embedded system has three components −</p>
        <ul>
          <li>It has hardware.</li>
          <li>It has application software.</li>
          <li>It has Real Time Operating system (RTOS) that supervises the application software and provide mechanism to let the processor run a process as per scheduling by following a plan to control the latencies. RTOS defines the way the system works. It sets the rules during the execution of application program. A small scale embedded system may not have RTOS.</li>
        </ul>
        <p>So we can define an embedded system as a Microcontroller based, software driven, reliable, real-time control system.</p><br>
        <h3>Characteristics of an Embedded System</h3><br>
       <ul>
          <li><p><b>Single-functioned </b> − An embedded system usually performs a specialized operation and does the same repeatedly. For example: A pager always functions as a pager.</p></li>
          <li><p><b>Tightly constrained </b>− All computing systems have constraints on design metrics, but those on an embedded system can be especially tight. Design metrics is a measure of an implementation's features such as its cost, size, power, and performance. It must be of a size to fit on a single chip, must perform fast enough to process data in real time and consume minimum power to extend battery life.</p></li>
          <li><p><b>Reactive and Real time </b>− Many embedded systems must continually react to changes in the system's environment and must compute certain results in real time without any delay. Consider an example of a car cruise controller; it continually monitors and reacts to speed and brake sensors. It must compute acceleration or de-accelerations repeatedly within a limited time; a delayed computation can result in failure to control of the car.</p></li>
          <li><p><b>Microprocessors based</b> − It must be microprocessor or microcontroller based.</p></li>            
          <li><p><b>Memory</b> − It must have a memory, as its software usually embeds in ROM. It does not need any secondary memories in the computer.</p></li>
          <li><p><b>Connected</b> − It must have connected peripherals to connect input and output devices.</p></li>
          <li><p><b>HW-SW systems</b> − Software is used for more features and flexibility. Hardware is used for performance and security.
          <br>
          <img src="a1.jpg" class="img-fluid" alt="block_diagram">
          </p></li>
        </ul>
        <br>
        <h4>Advantages</h4>
        <ul>
          <li>Easily Customizable</li>
          <li>Low power consumption</li>
          <li>Low cost</li>
          <li>Enhanced performance</li>
       </ul>
       
        <h4>Disadvantages</h4>
        <ul>
          <li>High development effort</li>
          <li>Larger time to market</li>
       </ul>
       <br>
        <h3>Basic Structure of an Embedded System</h3>
        <br>
        <p>The following illustration shows the basic structure of an embedded system −</p>
        <img src="a2.jpg" class="img-fluid" alt="block_diagram">
       <ul>
          <li><p><b>Sensor </b> − It measures the physical quantity and converts it to an electrical signal which can be read by an observer or by any electronic instrument like an A2D converter. A sensor stores the measured quantity to the memory.</p></li>
          <li><p><b>A-D Converter</b>− An analog-to-digital converter converts the analog signal sent by the sensor into a digital signal.</p></li>
          <li><p><b>Processor & ASICs </b>− Processors process the data to measure the output and store it to the memory.</p></li>
          <li><p><b>D-A Converter</b>− A digital-to-analog converter converts the digital data fed by the processor to analog data</p></li>            
          <li><p><b>Actuator</b>− An actuator compares the output given by the D-A Converter to the actual (expected) output stored in it and stores the approved output.</p></li>
       </ul>
       <br>
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
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="footer mt-auto py-3">
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
