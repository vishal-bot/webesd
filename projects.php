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
  <div id="space">
  </div>
  <div class="container-fluid">
        
        <main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
      <span id="articleH" class="d-block p-2 bg-dark text-white text-monospace text-center" ><h3>Projects On Embedded</h3></span>
        <hr>
      <ul class="list-unstyled">
  <li class="media my-4 border para">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
     <a href="https://www.electronicsforu.com/electronics-projects/dimming-lcd-backlight" target="_blank"> <h5 class="mt-0 mb-1 ">Dimming LCD Backlight</h5></a>
     Presented here is an LCD power-saving backlight-control circuit. LCD is used in many projects for information display since it consumes less power. But power consumption in an LCD backlight draws a lot of attention. Since LDR resistance changes as per ambient light, voltage of NE555 also varies accordingly. This variation in voltage, changes the duty cycle of the output waveform, giving higher duty cycle when ambient light is not present. In this way it can be used to dim the LCD backlight for power saving.   </div>
  </li>
  <li class="media my-4 border">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <a href="https://www.electronicsforu.com/electronics-projects/efficient-led-blinking-for-embedded-systems" target="_blank"> <h5 class="mt-0 mb-1">LED blinking systems</h5></a>
    Smart hardware designs simplify embedded software and make it more reliable. Designers use blinking LED signals to indicate different status and for inbuilt testability. Making an LED array blink requires an individual software loop for each LED or an individual timer and specific software to serve it. This can be an issue in a system that uses low-level MCUs which provide limited resources. The circuit presented here solves this problem by adding a simple hardware comprising low-cost inverters with Schmitt trigger for blinking as many LEDs as required
    </div>
  </li>
  <li class="media my-4 border para">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <a href="https://www.electronicsforu.com/electronics-projects/propeller-message-display-with-temperature-indicator" target="_blank"> <h5 class="mt-0 mb-1">Propeller Message Display</h5></a>
    This next project describes a microcontroller-based propeller display that displays any message sent to it via hyper-terminal of a personal computer. Moreover, a temperature sensing IC (TMP125) is mounted onto the propeller display to display temperature in real time. It gives a 360-degree view and displays several characters in a revolving circular path using just eight LEDs. The main highlight of the project is a vertical facing display with true 360-degree viewing angle.    </div>
  </li>
  <li class="media my-4 border">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <a href="https://www.electronicsforu.com/electronics-projects/unique-led-lantern-2" target="_blank"> <h5 class="mt-0 mb-1">Unique LED Lantern</h5></a>
    Presented here is an LED lantern that also functions as an emergency light or a tent light. The design has all required functions, including on/off switch, maintenance-free rechargeable battery, integrated battery charger and more. The built-in battery can be recharged using any 500mA external DC input voltage ranging from 9V to 18V using its onboard voltage regulator.    </div>
  </li>
  <li class="media my-4 border para">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <a href="https://www.electronicsforu.com/electronics-projects/decade-counter-based-flash-light" target="_blank"> <h5 class="mt-0 mb-1">Decade Counter Based Flash Light</h5></a>
    This decade counter based flash light circuit generates flashing lights in running pattern. In conventional running lights, the LEDs glow one by one. In this circuit, the LEDs flash a number of times one by one.    </div>
  </li>
  <li class="media my-4 border">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <a href="https://www.electronicsforu.com/electronics-projects/hardware-diy/make-air-quality-meter" target="_blank"> <h5 class="mt-0 mb-1">Air Quality Monitoring Device</h5></a>
    Air pollution and concern about air quality is not something new. The emphasis has shifted from pollution problems caused by the industry to the ones associated with motor vehicle emissions. A typical PM2.5/10 based meter costs around US$ 200. This project presents a meter for monitoring air particles, gas concentration, temperature, humidity and time costing around US$ 45.    </div>
  </li>
  <li class="media my-4 border para">
    <img src="media.jpg" class="mr-3" alt="...">
    <div class="media-body">
    <a href="https://www.electronicsforu.com/electronics-projects/hardware-diy/cellphone-based-water-pump-remote-controller" target="_blank"> <h5 class="mt-0 mb-1">Cell phone-Based Remote Controller for Water Pump</h5></a>
    Farmers often face inconvenience in switching on a water pump installed in remote farms. Microcontroller based circuits are used to solve this problem. This next project presents a cell phone-based remote controller for water pump. By calling the cell phone attached to the controller, the water pump can be directly activated.    </div>
  </li>
</ul>
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
</div>
       
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
