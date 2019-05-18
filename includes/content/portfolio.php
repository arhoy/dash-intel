
    

  <!--Main Content-->
  <div class="col-md-12 custom_more_margin"><!--Need to have col-md-10 in order to make layout possible with side bar-->

<!-- Portfolio Grid Section -->
<section class="portfolio" id="section_3">
<div class="container">
<h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
<hr class="star-dark mb-5">
<div class="row">
  <div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
      <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
          <i class="fa fa-search-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="images/portfolio/cabin.png" alt="">
    </a>
  </div>
  <div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
      <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
          <i class="fa fa-search-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="images/portfolio/cake.png" alt="">
    </a>
  </div>
  <div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
      <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
          <i class="fa fa-search-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="images/portfolio/circus.png" alt="">
    </a>
  </div>
  <div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
      <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
          <i class="fa fa-search-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="images/portfolio/game.png" alt="">
    </a>
  </div>
  <div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
      <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
          <i class="fa fa-search-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="images/portfolio/safe.png" alt="">
    </a>
  </div>
  <div class="col-md-6 col-lg-4">
    <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
      <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
          <i class="fa fa-search-plus fa-3x"></i>
        </div>
      </div>
      <img class="img-fluid" src="images/portfolio/submarine.png" alt="">
    </a>
  </div>
</div>
</div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
<div class="container">
<h2 class="text-center text-uppercase text-white">About</h2>
<hr class="star-light star-light-blue mb-5">
<div class="row">
  <div class="col-lg-4 ml-auto">
    <p class="lead">This site uses a free modified bootstrap 4 theme called <em>Freelancer</em>. We use bootstrap 4, customized css3, rest APIs, and the latest es6 javascript code to create clean, light-weight and custom built websites and web apps.</p>
  </div>
  <div class="col-lg-4 mr-auto">
    <p class="lead">This is a simple sample website used to illustrate some of the potential work we could do for you. If you are interested in learning more, please fill out the contact form below. </p>
  </div>
</div>

</div>
</section>

<!-- Contact Section -->
<section id="contact">
<div class="container">
<h2 class="text-center text-uppercase text-secondary mb-0">Contact Me</h2>
<hr class="star-dark mb-5">
<div class="row">
  <div class="col-lg-8 mx-auto">
    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
    <form name="sentMessage" id="contactForm" novalidate="novalidate">
      <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
          <label>Name</label>
          <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
          <label>Email Address</label>
          <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
          <label>Phone Number</label>
          <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
          <label>Message</label>
          <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
          <p class="help-block text-danger"></p>
        </div>
      </div>
      <br>
      <div id="success"></div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
      </div>
    </form>
  </div>
</div>
</div>
</section>

<!-- Footer -->
<footer class="footer text-center">
<div class="container">
<div class="row">
  <div class="col-md-4 mb-5 mb-lg-0">
    <h4 class="text-uppercase mb-4">Location</h4>
    <p class="lead mb-0">2220 Meridian Blvd
      <br>Minden, NV 89423</p>
  </div>
  <div class="col-md-4 mb-5 mb-lg-0">
    <h4 class="text-uppercase mb-4">Around the Web</h4>
    <ul class="list-inline mb-0">
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fa fa-fw fa-facebook"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fa fa-fw fa-google-plus"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fa fa-fw fa-twitter"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fa fa-fw fa-linkedin"></i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
          <i class="fa fa-fw fa-dribbble"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="col-md-4">
    <h4 class="text-uppercase mb-4">About Freelancer</h4>
    <p class="lead mb-0">Freelance is a free to use, open source Bootstrap theme created by
      <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
  </div>
</div>
</div>
</footer>

<div class="copyright py-4 text-center text-white">
<div class="container">
<small>Copyright &copy; dash-intel.com <span class = "displayYear"></span></small>
</div>
</div>




</div><!-- Main content container-->  